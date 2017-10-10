<template>
  <div class="hello">

    <div class="col-md-3 line">
      <div class="adminMenu">
        <div class="authorSection">
          <button class="btn" v-on:click="addAuthor">Add author</button>
          <label>Edit or Delete Author</label>
          <select class="form-control select"  v-model="author">
            <option value="">Authors</option>
            <option v-for="author in options.authors" 
            :value="author.id">{{author.name}} {{author.surname}}</option>
          </select>
        </div>

        <div class="genreSection">
          <button class="btn" v-on:click="addGenre">Add genre</button>
          <label>Edit or Delete Genre</label>
          <select class="form-control select"  v-model="genre">
            <option value="">Genres</option>
            <option v-for="genre in options.genres" 
            :value="genre.id">{{genre.genre}}</option>
          </select>
        </div>

        <div class="bookSection">
          <button class="btn" v-on:click="addBook">Add book</button>
          <label>Edit or Delete book</label>
          <select class="form-control select"  v-model="book">
            <option value="">books</option>
            <option v-for="book in options.books" 
            :value="book.id">{{book.book}}</option>
          </select>
        </div>

        <div class="userSection">
          <button class="btn" v-on:click="addBook">Add user</button>
          <label>Edit or Delete user</label>
          <select class="form-control select"  v-model="user">
            <option value="">users</option>
            <option v-for="user in options.users" 
            :value="user.id">{{user.name}} {{user.surname}}</option>
          </select>
        </div>
      </div>  
    </div>
    <div class="col-md-9 ">
      Colmd 9
    </div>

  </div> 
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      author: '',
      genre: '',
      book: '',
      user: '',
      options: {
        authors: [
          {
            'id':1,
            'name': 'andrew',
            'surname' : 'Kolorii'
          }
        ],
        genres: [
          {
            'id':1,
            'genre': 'shadow'
          }
        ],
        books: [
          {
            'id': 1,
            'book' : 'war of gods'
          }
        ],
        users: [
          {
            'id': 1,
            'name': 'Andrew',
            'surname': 'Kolotii'
          }
        ]
      }
      // msg: 'Welcome to Your Vue.js App'
    }
  },
  methods: {
    addAuthor: function () {

    },
    addGenre: function () {

    },
    addBook: function () {
      console.log(this.book);
    },
    createUser: function () {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
   .line { 
    border-right: 2px solid #ccc; /* Параметры линии */ 
   }

  .adminMenu button{
    display: block;
  }

   /* .authorSection button,.genreSection button,.bookSection button, userSection{
     display: block;
   } */

  .authorSection, .genreSection, .bookSection, .userSection {
    margin-bottom: 20px;
  }
/* h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
} */
</style>
