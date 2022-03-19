<template>
  <div>
      <p class="text-secondary">{{views}} views</p>
      <button class="btn btn-success" @click="addLike">Like ({{like}})</button>
      <button class="btn btn-danger" @click="addDislike">dislike ({{dislike}})</button>
  </div>
</template>

<script>
export default {
    name: "ShowPostComponent",
    data() {
      return {
          like: 0,
          dislike: 0
      }
    },
    props: ['views', 'id'],
    methods: {
        addLike() {
            axios.get('/add/like/'+this.id);
            this.like++;
        },
        addDislike() {
            axios.get('/add/dislike/'+this.id);
            this.dislike++;
        }
    },
    mounted() {
        axios.get('/get/all/likes/'+this.id)
        .then((response) => {
            this.like = response.data.likes;
            this.dislike = response.data.dislikes;
        })
        axios.get('/update/view/'+this.id);
    }
}
</script>

<style scoped>

</style>
