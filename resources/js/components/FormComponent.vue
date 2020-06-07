<template>
  <div class = "row justify-content-center">
    <transition name="fade">
      <div v-if="hint==null">
        <div class="alert alert-danger col-12 answer" role="alert">
          Recuerda: si recargas o sales de la página no se guardará tu progreso!
        </div>
        <div class="alert alert-info answer" role="alert">
            - Modo ayuda: dispones de un botón para que consultes la respuesta en todo momento, ideal para estudiar.<br>
            - Modo examen: sin ayudas, como en el examen.
        </div>
        <div class = "row justify-content-between">
          <button type="button" class="btn btn-success button1 bouncy" v-on:click="hint = true">Modo ayuda</button>
          <button type="button" class="btn btn-danger button1 bouncy" v-on:click="hint = false">Modo examen</button>
        </div>
      </div>
    </transition>
    <div class = "row justify-content-center">
      <div class="form col-12" v-if="hint != null && index < questions_length">
        <transition-group tag="div" name="question">
          <question-component
            v-for="question in questionsFilter(questions)"
            :key="question.index"
            :question="question"
            :correct="correct"
            :category="category"
            :index="index"
            :questions_length="questions_length"
            @change="changeQuestion"
            @submitQuestion="getAnswer($event)"
          >{{ question }}</question-component>
        </transition-group>
      </div>
      <div class = "col-12 text-center mt-4" v-if="hint==true">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Ayuda</button>
      </div>
    </div>

      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title question-header text-center" id="exampleModalLabel">Ayuda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body answer">
            {{ questions[index].hint }}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary answer" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import QuestionComponentVue from "./QuestionComponent.vue";
export default {
  props: ["category"],
  data() {
    return {
      hint: null,
      index: 0,
      questions: [],
      user_ans: null,
      correct: null,
      questions_length: 0,
      num_of_passed: 0,
      num_of_failed: 0
    };
  },
  components: {
    "question-component": QuestionComponentVue
  },
  computed: {},
  methods: {
    questionsFilter(questions) {
      const filteredQuestions = this.questions.filter(
        question => question.index == this.index
      );
      return filteredQuestions;
    },
    changeQuestion() {
      this.index++;
    },
    getAnswer(answer) {
      if (this.questions[this.index].correct_ans == answer) {
        this.correct = true;
        this.num_of_passed++;
        setTimeout(() => (this.correct = null), 1000);
      } else {
        this.correct = false;
        this.num_of_failed++;
        setTimeout(() => (this.correct = null), 1000);
      }

      if(this.index == this.questions_length-1){
        if(this.num_of_failed <= 3){
          axios.post("/update_num_of_tests",{
            test_passed: true,
        })
        }else if(this.num_of_failed > 3){
            axios.post("/update_num_of_tests",{
              test_failed: true,
          });
        }
        axios.post("/user_statistics",{
          questions_passed: this.num_of_passed,
          questions_failed: this.num_of_failed
        });
        alert("Test terminado correctamente");
      }
      
    },
  },
  mounted() {
    axios.get("/questions/" + this.category).then(response => {
      this.questions = response.data;
      for (let i = 0; i < response.data.length; i++) {
        this.questions[i].index = i;
      }
      this.questions_length = response.data.length;
    });
  }
};
</script>
