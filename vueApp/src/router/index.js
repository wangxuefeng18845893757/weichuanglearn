import Vue from 'vue'
import Router from 'vue-router'
import MovieList from '@/components/movies/MovieList'
import MusicList from '@/components/musics/MusicList'
import BookList from '@/components/books/BookList'
import PhotoList from '@/components/photos/PhotoList'
import MovieDetail from '@/components/movies/MovieDetail'
import BookDetail from '@/components/books/BookDetail'
import MusicDetail from '@/components/musics/MusicDetail'

Vue.use(Router)

export default new Router({
  mode:'history',
  routes: [
    {
      path: '/',
      name: 'MovieList',
      component: MovieList
    },{
      path:'/MusicList',
      component:MusicList
    },{
      path:'/BookList',
      component:BookList
    },{
      path:'/PhotoList',
      component:PhotoList
    },{
      path:'/MovieDetail/:id',
      component:MovieDetail
    },{
      path:'/BookDetail/:id',
      component:BookDetail
    },{
      path:'/MusicDetail/:id',
      component:MusicDetail
    }

  ]
})
