<style>

</style>
<div class="br-header">
  <div class="br-header-left">
    <a id="btnLeftMenu" href="" class="d-none d-lg-inline-block"><i class="icon ion-navicon-round"></i></a>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div>
  <div class="br-header-right">
    <nav class="nav">
      <div class="dropdown">
        <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name"><?php  echo $_SESSION["nombre"]?></span>
        </a>

        <input type="hidden" id="usu_idx" value="<?php echo "idusuario" ?>"><!-- Usu_id del usuario -->
        <input type="hidden" id="rol_idx" value="<?php echo "rol" ?>"><!-- Rol_id del usuario -->
        <input type="hidden" id="idx" value="<?php echo"io" ?>"><!-- Rol_id del usuario -->


          
        </div>
    </nav>
    </div>
</div>
