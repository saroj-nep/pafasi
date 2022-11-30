<template>
       <div class="bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Klicken Sie auf eine Körperregion (blauer Punkt), für die Sie das Ergebnis der Sonographie sehen möchten.​</b> </h1>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-10">
    <div>
    <img class=" " src="@/assets/schneidersonography.jpg"  alt="schneider_sonography" usemap="#sono"> 
    <map name="sono">
<area shape="circle" coords="192,97,12"  @click="sonography1();">
<area shape="circle" coords="192,172,12"  @click="sonography2();">
<area shape="circle" coords="166,192,12"  @click="sonography3();">
<area shape="circle" coords="140,214,12"  @click="sonography4();">
<area shape="circle" coords="192,262,12"  @click="sonography5();">
<area shape="circle" coords="245,214,12"  @click="sonography6();">
</map>
</div>
<div class='px-2 py-2' style="align-content: right;" >
<img id="img2_1" class="image2" style="display:none ; align-self: right;"   src="@/assets/hirtz_aorta.jpg" alt="schneider_aorta_längs">
<img id="img3_4" class="image2" style="display:none; align-self: right;"  src="@/assets/schneider_gab_374.jpg" alt="schneider_gab_374">
<img id="img3_5" class="image2" style="display:none ; align-self: right;"   src="@/assets/schneider_gab_375.jpg" alt="schneider_gab_375">
<img id="img5" class="image2" style="display:none;align-self: right;;"  src="@/assets/schneider_hb.jpg" alt="schneider_hb">
<img id="img3_2" class="image2" style="display:none; align-self: right;"  src="@/assets/hirtz_leb365.jpg" alt="schneider_leb_086">
<img id="img3_3" class="image2" style="display:none ; align-self: right;"   src="@/assets/hirtz_leb366.jpg" alt="schneider_leb_888">
<img id="img3_1" class="image2" style="display:none;align-self: right;;"  src="@/assets/hirtz_leb364.jpg" alt="schneider_leb_890">
<img id="img6_3" class="image2" style="display:none; align-self: right;"  src="@/assets/schneider_mlz.jpg" alt="schneider_mlz">
<img id="img6_1" class="image2" style="display:none ; align-self: right;"   src="@/assets/schneider_niere_li_langs.jpg" alt="schneider_niere_li_langs">
<img id="img6_2" class="image2" style="display:none;align-self: right;;"  src="@/assets/schneider_niere_li_quer.jpg" alt="schneider_niere_li_quer">
<img id="img4_1" class="image2" style="display:none; align-self: right;"  src="@/assets/schneider_niere_re_langs.jpg" alt="schneider_niere_re_langs">
<img id="img4_2" class="image2" style="display:none ; align-self: right;"   src="@/assets/schneider_niere_re_quer.jpg" alt="schneider_niere_re_quer">
<img id="img2_2" class="image2" style="display:none;align-self: right;;"  src="@/assets/schneider_pks.jpg" alt="schneider_pks">
<img id="img1_1" class="image2" style="display:none; align-self: right;"  src="@/assets/schneider_sono_langs.jpg" alt="schneider_sono_langs">
<img id="img1_2" class="image2" style="display:none; align-self: right;"  src="@/assets/schneider_sono_quer.jpg" alt="schneider_sono_quer">
</div>
</div>

</template>
<script>
export default{    
methods:{ 
  sonography1()
  {
    
        img1_1.style.display = "block";
        img1_2.style.display = "block";
        img2_1.style.display = "none";
        img2_2.style.display = "none";
         img3_1.style.display = "none";
        img3_2.style.display = "none";
        img3_3.style.display = "none";
        img3_4.style.display = "none";
        img3_5.style.display = "none";
        img4_1.style.display = "none";
        img4_2.style.display = "none";
        img5.style.display = "none";
        img6_1.style.display = "none";
        img6_2.style.display = "none";
        img6_3.style.display = "none";
       
      },
sonography2() {  
        img1_1.style.display = "none";
        img1_2.style.display = "none";
        img2_1.style.display = "block";
        img2_2.style.display = "block";
        img3_1.style.display = "none";
        img3_2.style.display = "none";
        img3_3.style.display = "none";
        img3_4.style.display = "none";
        img3_5.style.display = "none";
        img4_1.style.display = "none";
        img4_2.style.display = "none";
        img5.style.display = "none";
        img6_1.style.display = "none";
        img6_2.style.display = "none";
        img6_3.style.display = "none";
       
       
      },
sonography3() { 
        img1_1.style.display = "none";
        img1_2.style.display = "none";
        img2_1.style.display = "none";
        img2_2.style.display = "none";
        img3_1.style.display = "block";
        img3_2.style.display = "block";
        img3_3.style.display = "block";
        img3_4.style.display = "block";
        img3_5.style.display = "block";
        img4_1.style.display = "none";
        img4_2.style.display = "none";
        img5.style.display = "none";
        img6_1.style.display = "none";
        img6_2.style.display = "none";
        img6_3.style.display = "none";
       
       
      },
      sonography4()
  {
    
        img1_1.style.display = "none";
        img1_2.style.display = "none";
        img2_1.style.display = "none";
        img2_2.style.display = "none";
        img3_1.style.display = "none";
        img3_2.style.display = "none";
        img3_3.style.display = "none";
        img3_4.style.display = "none";
        img3_5.style.display = "none";
        img4_1.style.display = "block";
        img4_2.style.display = "block";
        img5.style.display = "none";
        img6_1.style.display = "none";
        img6_2.style.display = "none";
        img6_3.style.display = "none";
       
      },
 sonography5()
  {
        img1_1.style.display = "none";
        img1_2.style.display = "none";
        img2_1.style.display = "none";
        img2_2.style.display = "none";
        img3_1.style.display = "none";
        img3_2.style.display = "none";
        img3_3.style.display = "none";
        img3_4.style.display = "none";
        img3_5.style.display = "none";
        img4_1.style.display = "none";
        img4_2.style.display = "none";
        img5.style.display = "block";
        img6_1.style.display = "none";
        img6_2.style.display = "none";
        img6_3.style.display = "none";
       
      },
sonography6() { 
        img1_1.style.display = "none";
        img1_2.style.display = "none";
        img2_1.style.display = "none";
        img2_2.style.display = "none";
        img3_1.style.display = "none";
        img3_2.style.display = "none";
        img3_3.style.display = "none";
        img3_4.style.display = "none";
        img3_5.style.display = "none";
        img4_1.style.display = "none";
        img4_2.style.display = "none";
        img5.style.display = "none";
        img6_1.style.display = "block";
        img6_2.style.display = "block";
        img6_3.style.display = "block";
       
       
      },
      }}
</script>
<style scoped>

.image2{
  padding-bottom: 1%;

}

</style>