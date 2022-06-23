<template>
    <div >

    <navbar :ruta="ruta"></navbar>

  <!-- Main Sidebar Container -->
    <sidebar :ruta="ruta"></sidebar>

  <!-- Content Wrapper. Contains page content -->
 
    <div class="content-wrapper" >
    <transition name="slide" mode="out-in">
      <router-view></router-view>
    </transition>
    </div>
  <!-- /.content-wrapper -->
    <Footer></Footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  </div>
</template>

<script>
   
    import Navbar from './plantilla/Navbar.vue'
    import Sidebar from './plantilla/Sidebar.vue'
    //import Content from './plantilla/Content.vue'
    import Footer from './plantilla/Footer.vue'


    export default {
         name: 'app',
        props: ['ruta'],
        components:{Navbar, Sidebar, Footer}
         
    }
</script>




