import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import FormView from '../views/FormView.vue'
import calculatorView from '../views/CalculatorView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/form',
    name: 'Form',
    //component: () => import('../views/FormView.vue')
    component: FormView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/calculator',
    name: 'calculator',
    component: () => import( '../views/CalculatorView.vue')
  },
  {
    path: '/app',
    name: 'Application',
    meta:{
      butuhLogin:true
    },
    component: () => import('../views/Application/Home.vue')
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('../views/Login/Index.vue')
  }

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

router.beforeEach((to,from,next)=>{
  if(to.meta.butuhLogin){
    const token=localStorage.getItem('token')
    if(token){
      next();
    }else{
      next('/login')
    }
  }else{
    next()
  }
  
});
export default router
