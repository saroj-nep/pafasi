<template>
       <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=""> <strong>Klicken Sie auf das Bild, in dem Sie das Ergebnis der EKG sehen möchten   </strong> </h1>
    </div>
    <br>
    <div class="flex  gap-10 0">
    
    <img src="@/assets/sonography.png" alt="Workplace" usemap="#workmap"> 
    <map name="workmap">
  <area shape="circle" coords="240,303,20"  @click="sonography3();">
 <area shape="circle" coords="296,253,20"  @click="sonography2();">
  <area shape="circle" coords="189,252,20"  @click="sonography1();">
</map>

<img id="img1" style="display:none ; width:100%; height:100%" src="@/assets/sonography1.png" alt="sonography1">
<img id="img2" style="display:none ;width:100%; height:100%" src="@/assets/sonography2.jpg" alt="sonography2">
<img id="img3" style="display:none;width:100%; height:100%;" src="@/assets/sonography3.jpg" alt="sonography3">
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
