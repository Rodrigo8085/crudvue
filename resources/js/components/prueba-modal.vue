<template>
   <div>
      <div v-if="isOpen">
          esta abierto
                  <div class="modal fade" id="nuevo">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 style="color:black;" class="modal-title">Agregar nueva solicitud de soporte</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="isOpen=false">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
dsfsdgfd                    </div>

                    <!-- Modal footer -->
                    <!--<div class="modal-footer">
                    <button type="button" class="btn btn-danger" >Cerrar</button>
                    </div>-->

                </div>
            </div>
            </div>    
      </div>


      <button @click="isOpen=!isOpen" data-toggle="modal" data-target="#nuevo" >Open modal</button>

   </div>
   
</template>


<script>
   export default{
       data:function(){
          return {
      isOpen: false
    };
       }
   }
</script>