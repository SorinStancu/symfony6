<template>
  <div class="list row">
    <div class="col-md-8">
      <div class="input-group mb-3">
        <h2>{{ info }}</h2>
        <input type="text" class="form-control" placeholder="Search by title"
            v-model="title"/>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button"
              @click="searchTitle"
          >
            Search
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h4>Produse</h4>


<!--      <div v-for="produs in tutorials" >-->
<!--        {{ produs.title }}-->
<!--      </div>-->
      <ul class="list-group">
        <li class="list-group-item"
            :class="{ active: index == currentIndex }"
            v-for="(tutorial, index) in tutorials"
            :key="index"
            @click="setActiveTutorial(tutorial, index)"
        > xxx
          {{ tutorial.id }}

        </li>
      </ul>

      <button class="m-3 btn btn-sm btn-danger" @click="removeAllTutorials">
        Remove All
      </button>
    </div>
    <div class="col-md-6">
      <div v-if="currentTutorial">
        <h4>Tutorial</h4>
        <div>
          <label><strong>Title:</strong></label> {{ currentTutorial.title }}
        </div>
        <div>
          <label><strong>Description:</strong></label> {{ currentTutorial.description }}
        </div>
        <div>
          <label><strong>Status:</strong></label> {{ currentTutorial.published ? "Published" : "Pending" }}
        </div>
        <a class="badge badge-warning"
            :href="'/tutorials/' + currentTutorial.id"
        >
          Edit
        </a>
      </div>
      <div v-else>
        <br />
        <p>Please click on a Tutorial...</p>
      </div>
    </div>
  </div>
</template>
<script>
import Service from "../services/Service";
import axios from "axios";
export default {
  name: "test",
  data() {
    return {
      tutorials: [],
      currentTutorial: null,
      currentIndex: -1,
      title: "",
      info: null
    };
  },
  methods: {
    retrieveTutorials() {
      axios.get('http://localhost:8000/api/products')
          .then(response => (
      this.tutorials = response.data
          ))


      // Service.getAll()
      //     .then(response => {
      //       this.tutorials = response.data;
      //        // console.log(response.data);
      //     })
    },
    refreshList() {
      this.retrieveTutorials();
      this.currentTutorial = null;
      this.currentIndex = -1;
    },
    setActiveTutorial(tutorial, index) {
      this.currentTutorial = tutorial;
      this.currentIndex = index;
    },
    removeAllTutorials() {
      Service.deleteAll()
          .then(response => {
            console.log(response.data);
            this.refreshList();
          })
          .catch(e => {
            console.log(e);
          });
    },

    searchTitle() {
      Service.findByTitle(this.title)
          .then(response => {
            this.tutorials = response.data;
            console.log(response.data);
          })
          .catch(e => {
            console.log(e);
          });
    }
  },
  mounted() {
    this.retrieveTutorials();
  }
};
</script>
<style>
.list {
  text-align: left;
  max-width: 750px;
  margin: auto;
}
</style>