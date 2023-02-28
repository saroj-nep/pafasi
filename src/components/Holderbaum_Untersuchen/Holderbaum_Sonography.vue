<template>
  <div class="bg-emerald-600">
    <h1 style="font-size: 1.5em" class="h1 text-white text-center">
      <b
        >Klicken Sie auf eine Körperregion (blauer Punkt), für die Sie das
        Ergebnis der Sonographie sehen möchten.​</b
      >
    </h1>
  </div>
  <br />
  <div class="grid grid-cols-1">
    <div>
      <button
        id="helpbutton"
        class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
        @click.prevent="displayhelp()"
      >
        Hilfestellung (Kommentare und Ergänzungen)
      </button>
    </div>
    <br>
    <div>
      <h3 id="helpanswer" style="display: none">
        Rechter Oberbauch: Sie sehen echodichte Konkremente mit Ausbildung von
        Schallschatten in der Gallenblase, i.S.v. kleinen Gallensteinen
        (-->Cholezystolithiasis). Die Gallenblasenwand ist jedoch normal / nicht
        verdickt, was gegen eine Cholezystitis spricht.Die Gallengänge sind
        soweit einsehbar nur leicht erweitert.<br /><br /> Epigastrium: Die
        Bildeinstellung gestaltet sich hier schwierig aufgrund
        Luftüberlagerungen (-->Meteorismus).Soweit einsehbar kommt das Pankreas
        zwar homogen zur Darstellung, zum anderen aber unscharf abgrenzbar von
        der Umgebung und eher echoreich (=ödematös).In den extrahepatischen
        Gallenwegen können sie keinen Stein finden. Der Ductus choledochus ist
        leicht erweitert auf ca. 6 mm.
      </h3>
    </div>
  </div>
  <br>

  <div class="grid grid-cols-2 gap-10">
    <div>
      <img
        class=" "
        src="@/assets/schneidersonography.jpg"
        alt="schneider_sonography"
        usemap="#sono"
      />
      <map name="sono">
        <area shape="circle" coords="192,97,12" @click="sonography1()" />
        <area shape="circle" coords="192,172,12" @click="sonography2()" />
        <area shape="circle" coords="166,192,12" @click="sonography3()" />
        <area shape="circle" coords="140,214,12" @click="sonography4()" />
        <area shape="circle" coords="192,262,12" @click="sonography5()" />
        <area shape="circle" coords="245,214,12" @click="sonography6()" />
      </map>
    </div>

    <div class="px-2 py-2" style="align-content: right">
      <img
        id="img2_1"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/hirtz_aorta.jpg"
        alt="schneider_aorta_längs"
      />
      <img
        id="img3_4"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/GB_klein.jpg"
        alt="schneider_gab_374"
      />
      <img
        id="img3_5"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/GB_klein_2.jpg"
        alt="schneider_gab_375"
      />
      <img
        id="img5_1"
        class="image2"
        style="display: none; align-self: right ;"
        src="@/assets/HB_Hofer.jpg"
        alt="schneider_hb"
      />
      <img
        id="img3_2"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/hirtz_leb365.jpg"
        alt="schneider_leb_086"
      />
      <img
        id="img3_3"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/hirtz_leb366.jpg"
        alt="schneider_leb_888"
      />
      <img
        id="img3_1"
        class="image2"
        style="display: none; align-self: right ;"
        src="@/assets/hirtz_leb364.jpg"
        alt="schneider_leb_890"
      />
      <img
        id="img6_3"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_mlz.jpg"
        alt="schneider_mlz"
      />
      <img
        id="img6_1"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_niere_li_langs.jpg"
        alt="schneider_niere_li_langs"
      />
      <img
        id="img6_2"
        class="image2"
        style="display: none; align-self: right ;"
        src="@/assets/schneider_niere_li_quer.jpg"
        alt="schneider_niere_li_quer"
      />
      <img
        id="img4_1"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_niere_re_langs.jpg"
        alt="schneider_niere_re_langs"
      />
      <img
        id="img4_2"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_niere_re_quer.jpg"
        alt="schneider_niere_re_quer"
      />
      <img
        id="img4_3"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_mad120.jpg"
        alt="schneider_niere_re_langs"
      />
      <img
        id="img4_4"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_mad995.jpg"
        alt="schneider_niere_re_quer"
      />
      <img
        id="img2_2"
        class="image2"
        style="display: none; align-self: right ;"
        src="@/assets/schneider_pks_apk.jpg"
        alt="schneider_pks"
      />
      <img
        id="img1_1"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_sono_langs.jpg"
        alt="schneider_sono_langs"
      />
      <img
        id="img1_2"
        class="image2"
        style="display: none; align-self: right"
        src="@/assets/schneider_sono_quer.jpg"
        alt="schneider_sono_quer"
      />
    </div>
  </div>
</template>
<script>
export default {
  methods: {
    displayhelp() {
      if ((helpanswer.style.display = "none")) {
        helpanswer.style.display = "block";
      } else {
        helpanswer.style.display = "none";
      }
    },

    sonography1() {
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
      img4_3.style.display = "none";
      img4_4.style.display = "none";
      img5_1.style.display = "none";

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
      img4_3.style.display = "none";
      img4_4.style.display = "none";
      img5_1.style.display = "none";

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
      img4_3.style.display = "none";
      img4_4.style.display = "none";
      img5_1.style.display = "none";

      img6_1.style.display = "none";
      img6_2.style.display = "none";
      img6_3.style.display = "none";
    },
    sonography4() {
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
      img4_3.style.display = "block";
      img4_4.style.display = "block";
      img5_1.style.display = "none";

      img6_1.style.display = "none";
      img6_2.style.display = "none";
      img6_3.style.display = "none";
    },
    sonography5() {
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
      img4_3.style.display = "none";
      img4_4.style.display = "none";
      img5_1.style.display = "block";

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
      img4_3.style.display = "none";
      img4_4.style.display = "none";
      img5_1.style.display = "none";

      img6_1.style.display = "block";
      img6_2.style.display = "block";
      img6_3.style.display = "block";
    },
  },
};
</script>
<style scoped>
.button {
  background: black;
  margin-right: 5%;
  margin-left: 1%;
  margin-top: 1%;
  color: white;
  padding: 2%;
  border-radius: 20px;

  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.image2 {
  padding-bottom: 1%;
}
h3 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255);
}

h3:hover {
  background: rgb(5, 150, 105);
}
</style>
