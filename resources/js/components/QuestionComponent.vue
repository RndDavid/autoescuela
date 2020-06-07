<template>
  <div class="card">
    <div class="card-header question-header text-center bg-info">{{ index+1 }}. {{ question.question }}</div>
    <div class="card-body">
      <form action v-on:submit.prevent="changeQuestion()">
        <div class="radio">
          <label class = "answer">
            <input type="radio" name="optradio" value=1 v-model="answer" />
            {{ question.answer1 }}
          </label>
        </div>
        <div class="radio">
          <label class = "answer">
            <input type="radio" name="optradio" value=2 v-model="answer" />
            {{ question.answer2 }}
          </label>
        </div>
        <div class="radio">
          <label class = "answer">
            <input type="radio" name="optradio" value=3 v-model="answer" />
            {{ question.answer3 }}
          </label>
        </div>
        
        <img :src="image" class="img-fluid mx-auto d-block mt-1" alt="" style="max-height:300px;"><br>
        <div class = "row justify-content-center" v-if="index < (questions_length-1)">
          <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 question-header" v-if="answer != null && index <= (questions_length-1)">Enviar</button>
        </div>
        <div class = "row justify-content-center" v-else-if="index == (questions_length-1)">
          <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 question-header" v-if="answer != null">Terminar test</button>
        </div>
      </form>
      <!---->
      
      <transition name="fade" v-show="correct == true">
        <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;" v-show="correct == true">
          <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);" v-show="correct == true"></div>
          <span class="swal2-success-line-tip" v-show="correct == true"></span>
          <span class="swal2-success-line-long" v-show="correct == true"></span>
          <div class="swal2-success-ring" v-show="correct == true"></div>
          <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);" v-show="correct == true"></div>
          <div v-show="correct == true"
            class="swal2-success-circular-line-right"
            style="background-color: rgb(255, 255, 255);">
          </div>
        </div>
      </transition>
      <!---->
      <transition name = "fade" v-show="correct == false">
        <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"  v-show="correct == false">
          <span class="swal2-x-mark" v-show="correct == false"><span class="swal2-x-mark-line-left" v-show="correct == false"></span><span class="swal2-x-mark-line-right" v-show="correct == false"></span></span>
        </div>
      </transition>
      <!---->
    </div>
  </div>
</template>

<script>
export default {
  props: ["question", "correct","index","category","questions_length"],
  data() {
    return {
      answer: null,
      image: this.question.image
    };
  },
  mounted() {
  },
  methods: {
    changeQuestion() {
      //if (this.answer != null) {
        this.$emit("submitQuestion", this.answer);
        setTimeout(() => this.$emit("change"), 2000);
        
      /*} else {
        this.$emit("alert");
      }*/
    }
  }
};
</script>
