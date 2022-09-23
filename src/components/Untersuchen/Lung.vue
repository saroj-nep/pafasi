<template>
       <div class="bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Klicken Sie auf das Bild, in dem Sie das Ergebnis der Lungenfunktionstest sehen möchten.   </b> </h1>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-10">
    <div>
    <img class=" " src="@/assets/sonography.png"  alt="Workplace" usemap="#workmap"> 
    <map name="workmap">
  <area shape="circle" coords="180,226,20"  @click="sonography3();">
 <area shape="circle" coords="222,189,20"  @click="sonography2();">
  <area shape="circle" coords="140,189,20"  @click="sonography1();">
</map>
</div>
<div style="align-content: right;" >
<img id="img1" class="image2" style="display:none ; align-self: right;"   src="@/assets/sonography1.png" alt="sonography1">
<img id="img2" class="image2" style="display:none;align-self: right;;"  src="@/assets/sonography2.jpg" alt="sonography2">
<img id="img3" class="image2" style="display:none; align-self: right;"  src="@/assets/sonography3.jpg" alt="sonography3">
</div>
</div>

</template>
<script>
export default{    
methods:{ sonography1(){  if (img1.style.display !== "none") {
        img1.style.display = "none";
        img3.style.display = "none";
       img2.style.display = "none";
        
      } else {
        img1.style.display = "block";
       img2.style.display = "none";
       img3.style.display = "none";
       
      }},
sonography2() {  if (img2.style.display !== "none") {
        img2.style.display = "none";
        img1.style.display = "none";
       img3.style.display = "none";
        
      } else {
        img1.style.display = "none";
       img2.style.display = "block";
       img3.style.display = "none";
       
       
      }},
sonography3() {  if (img3.style.display !== "none") {
        img3.style.display = "none";
        img1.style.display = "none";
       img2.style.display = "none";
        
      } else {
       img1.style.display = "none";
       img2.style.display = "none";
       img3.style.display = "block";
       
       
      }}}}
</script>
<style scoped>

.image{
  max-width: 100%;
  max-height:100%;

}
.image2{
  width: 70%;
  height:70%;

}

</style>