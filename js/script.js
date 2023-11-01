$(function(){
    gsap.registerPlugin(ScrollTrigger); 
    ScrollTrigger.matchMedia({
        "(max-width: 1920px)": function () {
            
            gsap.to(".value_box", {
				scrollTrigger: {
				trigger: ".value_box",
				start: "-250% top",
				//end: "100% bottom",
				//pin : true,
				//scrub: 1,
				//markers:true,
				onEnter: function () {
                    gsap.to(".value_box:nth-child(1) .value_img_box", { duration: 0.6, width: 446, height: 670,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });

                    gsap.to(".value_box:nth-child(2) .value_img_box", { duration: 0.6, width: 446, height: 670,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                
                },
				},
			})
            
            gsap.to(".videoWrap", {
                scrollTrigger: {
                trigger: ".videoWrap",
                 start: "-400px top",
                //end: "50% top",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".videoWrap", { duration: 1, width: '100%', height: '810', 'border-radius': 0, ease: Cubic.easeOut });
                },
                },
            })

            gsap.to(".ser_value_wrap", {
                scrollTrigger: {
                trigger: ".ser_value_wrap",
                start: "-280% top",
                //end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".ser_value_box01", { duration: 1.3, left: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box03", { duration: 1.3, right: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box02", { duration: 1.3, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".clip_icon01", { duration: 1.3, left: '30.5%', opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".clip_icon02", { duration: 1.3, right: '30.5%', opacity: 1, ease: Cubic.easeOut });
                },
                // onEnterBack: function () {
                //     gsap.to(".ser_value_box01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box03", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box02", { duration: 1, opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon02", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                // },
                },
            })


            gsap.to(".s01_puzzle_wrap", {
                scrollTrigger: {
                trigger: ".s01_puzzle_wrap",
                start: "-250% top",
                //end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".s01_puzzle01", { duration: 1, opacity:1, top: '0', left: '0', ease: Cubic.easeOut });
                    gsap.to(".s01_puzzle02", { duration: 1.5, opacity:1, top: '0', right: '0', ease: Cubic.easeOut });
                    gsap.to(".s01_puzzle03", { duration: 1.5, opacity:1, bottom: '0', left: '0', ease: Cubic.easeOut });
                    gsap.to(".s01_puzzle04", { duration: 1, opacity:1, bottom: '0', right: '0', ease: Cubic.easeOut });
                },
                // onEnterBack: function () {
                //     gsap.to(".s01_puzzle01", { duration: 1, opacity:0.5, top: '-20%', left: '-20%', ease: Cubic.easeOut });
                //     gsap.to(".s01_puzzle02", { duration: 1, opacity:0.5, top: '-20%', right: '-20%', ease: Cubic.easeOut });
                //     gsap.to(".s01_puzzle03", { duration: 1, opacity:0.5, bottom: '-20%', left: '-20%', ease: Cubic.easeOut });
                //     gsap.to(".s01_puzzle04", { duration: 1, opacity:0.5, bottom: '-20%', right: '-20%', ease: Cubic.easeOut });
                // },
                },
            })

            gsap.to(".pill_wrap", {
                scrollTrigger: {
                trigger: ".pill_wrap",
                start: "-250% top",
                //end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".pill_text_box01", { duration: 1, top: '0%', left: '0%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_box02", { duration: 1, top: '0%', right: '0%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_tit", { duration: 1, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_cir_tit", { duration: 1, delay: 1.2, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_text_det", { duration: 1, delay: 1.3, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_arrow", { duration: 1, delay: 1.5, top: '42%', opacity: 1, ease: Cubic.easeOut });
                },
            },
            })

            gsap.to(".cazzle_img", {
                scrollTrigger: {
                trigger: ".cazzle_img",
                start: "-250% top",
                //end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".cazzle_img01", { duration: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".cazzle_img02", { duration: 1, delay: 0.3, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".cazzle_img03", { duration: 1, delay: 0.6, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".cazzle_img04", { duration: 1, delay: 0.9, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                },
            },
            })


        },
        "(max-width: 1720px)": function () {
            gsap.to(".value_box", {
				scrollTrigger: {
				trigger: ".value_box",
				start: "-250% top",
				//end: "100% bottom",
				//pin : true,
				//scrub: 1,
				//markers:true,
				onEnter: function () {
                    gsap.to(".value_box:nth-child(1) .value_img_box", { duration: 0.6, width: 350, height: 520,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });

                    gsap.to(".value_box:nth-child(2) .value_img_box", { duration: 0.6, width: 350, height: 520,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                
                },
				},
			})
        },
        "(max-width: 1214px)": function () {
            gsap.to(".value_box", {
				scrollTrigger: {
				trigger: ".value_box",
				start: "-250% top",
				//end: "100% bottom",
				//pin : true,
				//scrub: 1,
				//markers:true,
				onEnter: function () {
                    gsap.to(".value_box:nth-child(1) .value_img_box", { duration: 0.6, width: 300, height: 480,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });

                    gsap.to(".value_box:nth-child(2) .value_img_box", { duration: 0.6, width: 300, height: 480,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                
                },
				},
			})
            gsap.to(".videoWrap", {
                scrollTrigger: {
                trigger: ".videoWrap",
                 start: "-400px top",
               // end: "50% top",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".videoWrap", { duration: 1, width: '100%', height: '600', 'border-radius': 0, ease: Cubic.easeOut });
                },
                },
            })
            gsap.to(".pill_wrap", {
                scrollTrigger: {
                trigger: ".pill_wrap",
                start: "top bottom",
               // end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".pill_text_box01", { duration: 1, top: '0%', left: '0%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_box02", { duration: 1, top: '0%', right: '0%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_tit", { duration: 1, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_cir_tit", { duration: 1, delay: 1.2, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_text_det", { duration: 1, delay: 1.3, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_arrow", { duration: 1, delay: 1.5, top: '42%', opacity: 1, ease: Cubic.easeOut });
                },
            },
            })
        },
        "(max-width: 1000px)": function () {
            gsap.to(".videoWrap", {
                scrollTrigger: {
                trigger: ".videoWrap",
                 start: "-400px top",
              //  end: "50% top",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".videoWrap", { duration: 1, width: '100%', height: '380', 'border-radius': 0, ease: Cubic.easeOut });
                },
                },
            })
            gsap.to(".ser_value_wrap", {
                scrollTrigger: {
                trigger: ".ser_value_wrap",
                start: "-280% top",
              //  end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".ser_value_box01", { duration: 1.3, left: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box03", { duration: 1.3, right: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box02", { duration: 1.3, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".clip_icon01", { duration: 1.3, left: '28.5%', opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".clip_icon02", { duration: 1.3, right: '28.5%', opacity: 1, ease: Cubic.easeOut });
                },
                // onEnterBack: function () {
                //     gsap.to(".ser_value_box01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box03", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box02", { duration: 1, opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon02", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                // },
                },
            })
            gsap.to(".pill_wrap", {
                scrollTrigger: {
                trigger: ".pill_wrap",
                start: "-250% top",
             //   end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".pill_text_box01", { duration: 1, top: '0%', left: '50%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_box02", { duration: 1, top: '0%', right: '50%', ease: Cubic.easeOut });
                    gsap.to(".pill_text_tit", { duration: 1, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_cir_tit", { duration: 1, delay: 1.2, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_text_det", { duration: 1, delay: 1.3, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".pill_arrow", { duration: 1, delay: 1.5, top: '47%', opacity: 1, ease: Cubic.easeOut });
                },
            },
            })
        },
        "(max-width: 540px)": function () {
            gsap.to(".value_box", {
				scrollTrigger: {
				trigger: ".value_box",
				start: "-250% top",
				//end: "100% bottom",
				//pin : true,
				//scrub: 1,
				//markers:true,
				onEnter: function () {
                    gsap.to(".value_box:nth-child(1) .value_img_box", { duration: 0.6, width: 223, height: 325,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .value_txt_box", { duration: 0.6, delay: 0.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(1) .two_cir_box", { duration: 0.6, delay: 1, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });

                    gsap.to(".value_box:nth-child(2) .value_img_box", { duration: 0.6, delay: 1, width: 223, height: 325,'border-radius': 24, ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .value_txt_box", { duration: 0.6, delay: 1.5, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                    gsap.to(".value_box:nth-child(2) .two_cir_box", { duration: 0.6, delay: 2, opacity: 1, transform: 'translateY(0)', ease: Cubic.easeOut });
                },
				},
			})
            gsap.to(".videoWrap", {
                scrollTrigger: {
                trigger: ".videoWrap",
                 start: "-400px top",
               // end: "50% top",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".videoWrap", { duration: 1, width: '100%', height: '220', 'border-radius': 0, ease: Cubic.easeOut });
                },
                },
            })
            gsap.to(".ser_value_wrap", {
                scrollTrigger: {
                trigger: ".ser_value_wrap",
                start: "-250% top",
               // end: "100% bottom",
                //pin : true,
                //scrub: 1,
                //markers:true,
                onEnter: function () {
                    gsap.to(".ser_value_box01", { duration: 1.3, left: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box03", { duration: 1.3, delay: 1, right: 0, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".ser_value_box02", { duration: 1.3, delay: 2, opacity: 1, ease: Cubic.easeOut });
                    gsap.to(".clip_icon01", { left: '28.5%', opacity: 0});
                    gsap.to(".clip_icon02", { right: '28.5%', opacity: 0});
                },
                // onEnterBack: function () {
                //     gsap.to(".ser_value_box01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box03", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".ser_value_box02", { duration: 1, opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon01", { duration: 1, left: '45%', opacity: 0.5, ease: Cubic.easeOut });
                //     gsap.to(".clip_icon02", { duration: 1, right: '45%', opacity: 0.5, ease: Cubic.easeOut });
                // },
                },
            })
        }
    })
});