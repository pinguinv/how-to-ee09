import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutAuthorView from '../views/AboutAuthorView.vue'
import ExamView from '../views/ExamView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: "/home",
      redirect: "/"
    },
    {
      path: '/egzamin',
      name: 'exam',
      component: ExamView
    },
    {
      path: '/o-autorze',
      name: 'aboutAuthor',
      component: AboutAuthorView
    }
  ]
})

export default router
