<template>
  
  <div class="row justify-content-center">
    <table class="table table-striped">
        <thead class="thead">
            <tr>
            <th scope="col" class="question-header">Fecha</th>
            <th scope="col" class="question-header">Preguntas acertadas</th>
            <th scope="col" class="question-header">Preguntas falladas</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(stats,index) in user_statistics" :key="index">
            <th scope="row" class="answer"> {{stats.updated_at | moment}} </th>
            <td class="answer"> {{stats.questions_passed}} </td>
            <td class="answer"> {{stats.questions_failed}}</td>
            </tr>
        </tbody>
    </table>

  </div>
  
</template>

<script>
import moment from 'moment'
export default {
  data() {
    return {
      user_statistics: [],
      user_statistics_length: 0
    };
  },
  components: {},
  computed: {},
  methods: {},
  mounted() {
    axios.get("/user_statistics").then(response => {
      this.user_statistics = response.data;
      console.log(this.user_statistics);
      for (let i = 0; i < response.data.length; i++) {
        this.user_statistics[i].index = i;
      }
      this.user_statistics_length = response.data.length;
    });
  },
  filters: {
    moment: function (date) {
      return moment(date).locale("es").format('DD MMMM YYYY');
    }
  }
  
};
</script>