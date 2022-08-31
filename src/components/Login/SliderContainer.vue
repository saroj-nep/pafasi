<template>
  <div class="slider">
    <div
      class="slide"
      ref="allSlides"
      v-for="(url, index) in urls"
      :key="index"
    >
      <img :src="url" alt="Photo {{ index }}" />
      <h1 class="heading--1">{{ texts[index] }}</h1>
    </div>
    <!-- @/assets/hrA.svg -->
    <div class="slider__btn slider__btn--left"></div>
    <div
      class="slider__btn slider__btn--right"
      @click="nextSlide"
      ref="rigthBtn"
    ></div>
    <div class="dots" @click="dotsClickEvent"></div>
  </div>
</template>
<script>
import image1 from "@/assets/banner.jpeg";
export default {
  name: "photo__content",
  data() {
    return {
      dotClass: ".dots",
      urls: [image1],
      currSlide: 0,
      texts: [
        "PaFaSi",
        
      ],
    };
  },
  methods: {
    activeDot(slide) {
      document
        .querySelectorAll(".dots__dot")
        .forEach((dot) => dot.classList.remove("dots__dot--active"));
      document
        .querySelector(`.dots__dot[data-slide="${slide}"]`)
        .classList.add("dots__dot--active");
    },
  
    nextSlide() {
      if (this.currSlide === this.urls.length - 1) {
        this.currSlide = 0;
      } else {
        this.currSlide++;
      }
     
      this.activeDot(this.currSlide);
    },
    createDots() {
      //Dots
      const dotsContainer = document.querySelector(this.dotClass);

      this.$refs.allSlides.forEach((_, i) => {
        dotsContainer.insertAdjacentHTML(
          "beforeend",
          `<button class="dots__dot" data-slide="${i}"></button>`
        );
      });
    },
    dotsClickEvent(e) {
      if (e.target.classList.contains("dots__dot")) {
        const { slide } = e.target.dataset;
       
        this.activeDot(slide);
      }
    },
    init() {
      
      this.createDots();
      this.activeDot(this.currSlide);
    },

    slider() {
      this.init();
     
    },
  },
  mounted() {
    this.slider();
  },
};
</script>
<style lang="scss">
@import "@/style/main.scss";
.slider {
  grid-column: full-start/col-end 6;
  background-color:rgb(5, 150, 105);
  width: 100%;
  height: 100%;
  position: relative;

  overflow: hidden;

  @media only screen and (max-width: 18.75em) /*300px*/ {
    & {
      display: none;
    }
  }
}
.slide {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;

  transition: transform 1s;
}

.slide > img {
  width: 70%;
  height: 70%;
  object-fit: contain;
}

.slider__btn--left {
  left: 6%;
  transform: translate(-50%, -50%);
}

.slider__btn--right {
  right: 6%;
  transform: translate(50%, -50%);
}

.heading--1 {
  font-size: 2rem;
  color:rgb(255, 255, 255);
}
.dots {
  position: absolute;
  bottom: 5%;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.dots__dot {
  background-color: transparent;
  @include customBorder(transparent, rgb(5, 150, 105));

  opacity: 0.7;
  height: 1rem;
  width: 1rem;
  border-radius: 50%;
  margin-right: 1.75rem;
  cursor: pointer;
  transition: all 0.5s;
}

.dots__dot:last-child {
  margin: 0;
}

.dots__dot--active {
  background-color: rgb(5, 150, 105);
  opacity: 1;
}
</style>
