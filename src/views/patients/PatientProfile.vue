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
          <h3 style="margin-top: 50px;"> <strong>Was werden Sie als nächstes tun? </strong> </h3><br>
          <Option />
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
import Notepad from '@/components/Notepad.vue';


export default {
  props: ["id"],
  data() {
    return {
      patient: null
    };
  },
  mounted() {
    fetch("http://localhost:3000/patients/" + this.id) //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patient = data)
      .catch(err => console.log(err.message));
  },
  components: { Option, Notepad }
}

</script>
<style scoped>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 10px;
  height: 600px;

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
</style>
