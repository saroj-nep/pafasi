<!-- <template>  

              <form action="" class="form" method="POST">
                
                  <div class="form__group">
                    <label for="User" class="form__label">Tutor-E-Mail:</label>
                    <input
                      type="email"
                      placeholder="@stud.uni-saarland.de"
                      id="User"
                      class="form__input valid"
                      name="email"
                      v-model="Tutor.email"
                    />
                  </div>
                  
    <div class="form__group">
      <div class="linking">
                    <label for="User" class="form__label">Kennwort:</label>
                     </div>
                     <input
                      type="password"
                      placeholder="*********"
                      class="form__input valid"
                      name="password"
                      v-model="Tutor.password"
                    />
                  </div>
                
           
                    <button
                      class="form__btn"
                      @click.prevent="onLogin()"
                    >
                      Einloggen
                    </button>
                  
              </form>
             <div class="linking">
    <p for="Password" class="form__label">
     
    </p>
    
  </div>
</template>
<script>
import axios from "axios";


export default {
  name: "Home",
  data() {
    return {
      User: {
        email: null,
        password: null
      },
  }
    
    
  }, created(){
    console.log(localStorage.email)
    if (!(localStorage.tutoremail=='')){this.$router.push("/tutorpanel");}
  },
  methods: {
    Online(){
      var data = new FormData();
    
      
      data.append("email", this.Tutor.email);
      localStorage.tutoremail=this.Tutor.email;
     
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=online",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            
          
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },


    onLogin() {
      var data = new FormData();
    
      
      data.append("email", this.Tutor.email);
      data.append("password", this.Tutor.password);
      axios
        .post(
          // "./Api/api.php?action=login",
           "./Api/api.php?action=tutorlogin",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          
            this.$router.push("/tutorpanel");
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    }
  }
};
</script>
<style lang="scss" scoped>
@import "@/style/main.scss";
a:focus {
  outline: none;
}
.linking {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  &__forgetPassword,
  &__signup,
  &__sso {
    text-decoration: none;
    font-size: 1.3rem;
  }
  &__forgetPassword {
    color: $color__secondary;
  }
  &__signup,
  &__sso {
    color: $color__links;
    font-weight: 500;
  }
}
.form {
  width: 100%;
  &__group {
    &:not(:last-child) {
      margin-bottom: 1.5rem;
    }
  }
  &__input {
    height: 2rem;
    width: 100%;
    padding: 2rem 1rem;
    border-radius: 4px;
    color: $color__primary;
    border: 1px solid $color__secondary;
    &:focus,
    &:active {
      outline: none;
    }
    &:placeholder-shown,
    &::placeholder {
      color: $color__secondary;
    }
  }
  &__label {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: $color__primary;
  }
  &__btn {
    width: 100%;
    @include customBorder($color__links, $color__secondary);
    color: $color__white;
    padding: 1rem;
    border-radius: 4px;
    margin-bottom: 1rem;

    cursor: pointer;
  }
}


.valid:focus,
.valid:active {
  border-color: $color__links;
  box-shadow: inset 0 0 4px 0 $color__links;
}
</style> -->
