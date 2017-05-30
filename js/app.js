var routerApp = angular.module('resumeApp', ['ui.router','ngAnimate']);

routerApp.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');
    
    $stateProvider
        
        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: 'views/home.html'
        })                      
        
        .state('experience', {
            url: '/experience',
            templateUrl: 'views/experience.html'            
        })

        .state('education', {
            url: '/education',
            templateUrl: 'views/education.html'            
        })

        .state('skills', {
            url: '/skills',
            templateUrl: 'views/skills.html',
        })
        .state('contact', {
            url: '/contact',
            templateUrl: 'views/contact.html',
        })


        // nested list with custom controller
        .state('skills.all', {
            url: '/all',   
            template: 'Things I\'m generally good at!'         
        })
        .state('skills.webdev', {
            url: '/webdev',   
            template: '<p>currently undergoing front-end web development training under <b><span style="color:orange">REKA studios</span></b> and now i can fairly understand html and css; know how to incorporate and work with bootstrap and JQuery framework, and also angularjs in producing my own responsive webpage. not much really... just enough to produce this simple page you are currently looking at! :)</p>'         
        })
        .state('skills.geophy', {
            url: '/geophy',   
            template: '<p>as a geophysics graduate, i have a slight experience using ProMax to process seismic data and Petrel to interpret seismic sections. but my biggest know-how is probably doing some basic rock physics analysis; mainly Gassmann fluid substitution and Amplitude Versus Offset (AVO).</p>'         
        })
        .state('skills.sports', {
            url: '/sports',   
            template: "<p>love is a tough word, & i am madly in love with the game of basketball. probably what i am most <i>skilled</i> at. biggest achievement yet is probably bringing the state of Pahang to win the <b>national championship</b> last year in 2016. was the team's point guard and racked up both the <b>Top Assist & Most Valueable Player!</b> awards.</p>"
        })
        .state('skills.others', {
            url: '/others',   
            template: '<p>I am a computer hardware junkie. fried a lot of (school) computers when i was young; even burnt my finger. but it was all worth it coz now i can build & troubleshoot computers. i use to play the piano, and i miss being able to play the piano. had i not quit piano school, i may have been a pianist on a cruise somewhere...</p>'
        })


        // nested list with custom controller
        .state('education.leeds', {
            url: '/leeds',            
        })
        .state('education.malaya', {
            url: '/malaya',            
            template: '<h3>UNIVERSITI MALAYA</h3><h4>BSc. Physics (Hons.)</h4><p>Completed my bachelor’s program in 3 and a half years, which covers the fundamentals of physics in classical and quantum mechanics, statistical physics and electromagnetics in the classroom, besides performing related experiments in the lab.</p><p>Conducted a year-long research on “Acoustic sensing using Fiber Bragg Grating” for my final year project and was awarded the best presenter in the 2013 Universiti Malaya Physics Colloquium.</p>'
        })   
        .state('education.srikdu', {
            url: '/srikdu',            
            template: '<h3>SEKOLAH SRI KDU</h3><h4>International Baccalaureatte Diploma Programme</h4><p>had too much fun here...</p>'
        })      
});

routerApp.controller('appController', function($scope) {
    
    $scope.apps = [ 
                   
                  { 
                    'url': 'images/avo.jpg',   
                    'tag': 'geoPhy'       
                  },  
                  { 
                    'url': 'images/html.jpg',
                    'tag': 'webDev'       
                  }, 
                  { 
                    'url': 'images/js.jpg',   
                    'tag': 'webDev'       
                  },  
                  { 
                    'url': 'images/matlab.jpg',   
                    'tag': 'geoPhy'       
                  }, 
                  { 
                    'url': 'images/interp.jpg',   
                    'tag': 'geoPhy'       
                  },  
                  { 
                    'url': 'images/maintenance.jpg',   
                    'tag': 'Others'       
                  },  
                  { 
                    'url': 'images/angularjs.jpg',   
                    'tag': 'webDev'       
                  },  
                  { 
                    'url': 'images/proc.jpg',   
                    'tag': 'geoPhy'       
                  },  
                  { 
                    'url': 'images/basketball.jpg',   
                    'tag': 'Sports'       
                  },
                  { 
                    'url': 'images/bootstrap.jpg',   
                    'tag': 'webDev'       
                  },  
                  { 
                    'url': 'images/css.jpg',   
                    'tag': 'webDev'       
                  },  

                ];
    
});

routerApp.directive('vectorText', function(){

    return {
        link: function () {
                $('.arrow-next').on('mouseenter',function(){
                  $('.arrow-next').fadeTo('slow',1);  
                });

                $('.arrow-next').on('mouseleave',function(){
                  $('.arrow-next').fadeTo('slow',0.3);
                });      

                $('.arrow-prev').on('mouseenter',function(){
                  $('.arrow-prev').fadeTo('slow',1);  
                });

                $('.arrow-prev').on('mouseleave',function(){
                  $('.arrow-prev').fadeTo('slow',0.3);
                });          
        }
    };
});



//$(document).ready(function(){
//    $('.arrow-next').mouseenter(function(){
//        $(this).fadeTo('slow',1);});
//  
//        
//    $('.arrow-next').mouseleave(function(){
//            $(this).fadeTo('fast',0.2);            
//        });
//    });
