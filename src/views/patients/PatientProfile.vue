<template>
  <div v-if="patient">

    <!-- <div class="grid grid-cols-4 gap-4">
  <div>01</div>
  <div>09</div>
</div> -->


    <!-- <div class="row"> -->
    <div class="grid grid-cols-4 gap-4">
      <!-- <div class="column left"> -->
      <!-- <div class="col-span-1">
        <div class="patient">
          <div>
            <h1><strong> Case {{ patient.id }}: {{ patient.title }}</strong></h1>
          </div>
        </div>
      </div> -->

      <div class="col-span-3">
        <div style="display:flex;  background-color: #e6e6e6; padding: 20px; border-radius: 10px;">
          <div class="patient" style="width: 25%;">
            <div>
              <img src="../../assets/Schneider.jpg" alt="Schneider" style="top: 20px;" />
              <h1><strong>
                  <!-- Case {{ patient.id }}: -->
                  Name: {{ patient.title }}
                </strong></h1>
              <div>Age: 75</div>
              <div>männlich</div>
            </div>
          </div>
          <div class="fallbeschreibung" style="width: 75%">
            <!-- Should be replaced by a widget -->
            <h3 style=""><strong>Fallbeschreibung</strong></h3>
            <br>
            <p style="border-radius: 5px">{{ patient.details }}</p>
            <!-- </div> -->
            <!-- <div class="column left"> -->
            <!-- </div> -->
          </div>
        </div>
        <div>
           <h1 class="h1" style="margin-top: 20px;margin-top: 20px; margin-left:400px;"> <strong>Was werden Sie als nächstes tun? </strong> </h1><br>
          
         
            <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button" @click="()=> TogglePopup('buttonTrigger')">
            ausführlichere Anamnese führen 
            </button>

            <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Anamnese />
            </Popup>

          <!-- <button style="margin-right: 50px" color="#42b983" class="button" @click="()=> TogglePopup('buttonTrigger')">
            einen Blick in die Patientenakte werfen
          </button><br>
          <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Patientenakte />
          </Popup>
        <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button" @click="()=> TogglePopup('buttonTrigger')">
            Patienten untersuchen
          </button>
          <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Untersuchen />
          </Popup>
          <button style="margin-right: 50px" color="#42b983" class="button" @click="()=> TogglePopup('buttonTrigger')">
            Laboranordnungen
          </button>
          <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Labaratory />
          </Popup>
          <button style="margin-right: 50px ;margin-left: 100px" color="#42b983" class="button" @click="()=> TogglePopup('buttonTrigger')">
            Uberweisung zum Facharzt ausstellen
          </button>
          <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Facharzt />
          </Popup>
          <button style="margin-right: 50px"  class="submitbutton" @click="()=> TogglePopup('buttonTrigger')">
            Heutige Vorstellung beenden und (be-)handeln
          </button>
          <Popup v-if="popupTriggers.buttonTrigger" :TogglePopup = "()=> TogglePopup('buttonTrigger')">
            <Submit />
          </Popup> -->

        </div>
      </div>
      <div class="col-span-1">
        <!-- <div class="column right"> -->
        <div class="Notepad">
          <!-- Should be replaced by a widget -->
          <Notepad />
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>

</template>

<script>
import Option from '../../components/Option.vue';
import Schneider from '../../assets/Schneider.jpg';
import Popup from '../../components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Anamnese from '@/components/Anamnese.vue';
import Patientenakte from '../../components/Patientenakte.vue';
import Untersuchen from '../../components/Untersuchen.vue';
import Labaratory from '../../components/Labaratory.vue';
import Facharzt from '../../components/Facharzt.vue';
import Submit from '../../components/Submit.vue';
export default {
  props: ["id"],
  data() {
    return {
      patient: null
    };
  },
  setup() {
    const popupTriggers = ref({
      buttonTrigger: false
    })
    const TogglePopup = (trigger) => {
      console.log(trigger, 'trigger')
      popupTriggers.value[trigger] = !popupTriggers.value[trigger]
    }
    return {
      Popup,
      popupTriggers,
      TogglePopup
    }
  },
  mounted() {
    fetch("http://localhost:3000/patients/" + this.id) //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patient = data)
      .catch(err => console.log(err.message));
  },
  components: { Option, Popup, Notepad, Anamnese, Patientenakte, Untersuchen, Labaratory, Facharzt,Submit }
}
</script>
<style scoped>
* {
  box-sizing: border-box;
}
.column {
  float: left;
  padding: 10px;
  overflow: auto;
  max-height: calc(100vh - 800px);
}
.left {
  width: 75%;
}
.column right {
  width: 25%;
}
.fallbeschreibung {
  /* border: 1px solid green; */
  text-align: left;
  /* margin-left: 200px; */
  padding-left: 10px;
  margin-right: 50px;
}
.Notepad {
  border: 1px solid green;
  text-align: left;
  height: 600px;
  padding-left: 10px;
}
.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.h1{
 font-size: large; 
}

</style>