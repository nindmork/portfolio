<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mork's Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D7JFWPHZKG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-D7JFWPHZKG');
    </script>
  </head>
  <body>
    <div id="navbar-placeholder"></div>

    <section id="profile">
      <div class="section__pic-container" data-aos="fade-right">
        <img src="./assets/profile-pic1.png" alt="John Doe profile picture" />
      </div>
      <div class="section__text" data-aos="fade-left">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Supanat Klins</h1>
        <p class="section__text__p2"> Programer/Developer and 3D Generalist</p>

        <div class="margin-top-10 btn-container" style="margin-top: 10px;">
          <!-- <button
            class="btn btn-color-2"
            onclick="window.open('./assets/DevResume_SupanatKlins.pdf')"
          >
            Download CV
          </button> -->
          <!-- <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button> -->
        </div>
        <div id="socials-container">
          <!--
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://linkedin.com/'"
          />
          -->
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon width"
            onclick="location.href='https://github.com/nindmork'"
          />
          
        </div>
      </div>
    </section>
    
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container" data-aos="zoom-in">
          <img
            src="./assets/S__15114244 (0-00-01-28).jpg"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container" data-aos="fade-up">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>3+ years Developer</p>
              <p>5+ years Advertising and Entertainment Production </p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>B.Sc. Bachelors Degree Ramkhamhaeng.<br />Broadcast. Bachelors Degree UTCC.</p>
            </div>
          </div>
          <div class="text-container">
            <p><!--
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quis
              reprehenderit et laborum, rem, dolore eum quod voluptate
              exercitationem nobis, nihil esse debitis maxime facere minus sint
              delectus velit in eos quo officiis explicabo deleniti dignissimos.
              Eligendi illum libero dolorum cum laboriosam corrupti quidem,
              reiciendis ea magnam? Nulla, impedit fuga!-->
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    
    <section id="projects" >
     
      <div class="content-container">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Dev Projects</h1>
        <img src="./assets/github.png" alt="My Github profile" class="icon" onclick="location.href='https://github.com/nindmork'"/>
      </div>

      
    
     

      <div class="experience-details-container">
        <div class="about-containers">  

          <?php
              $datas =  [
                [ "img" => "./assets/projects/CrispIP/Screenshot from 2024-12-12 10-03-26.webp",
                  "alt" => "CrispIP",
                  "title" => "CRISP IP - Smart Patent Prosecution with AI",
                  "url" => "./project_crispip"
                ],
                [ "img" => "./assets/projects/CrispIP/Screenshot from 2024-12-12 10-03-26.webp",
                  "alt" => "CrispIP",
                  "title" => "iCRM - Backoffice customer management",
                  "url" => "./project_icrm"
                ],
              ];
          ?>
          <?php 
            foreach ($datas as $data): ?>
          
            <div class="details-container color-container">
              <div class="article-container">
                <img
                  src="<?php echo htmlspecialchars($data['img']); ?>"
                  alt="<?php echo htmlspecialchars($data['alt']); ?>"
                  class="project-img"
                />
              </div>
              <h2 class="experience-sub-title project-title"><?php echo htmlspecialchars($data['title']); ?></h2>
              <div class="btn-container">
                <button
                  class="btn btn-color-2 project-btn"
                  onclick="location.href='<?php echo htmlspecialchars($data['url']); ?>'"
                >
                  Details
                </button>
              </div>
            </div>
          <?php endforeach; ?>
          

          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/submittobb/Thrumsnail2.jpg"
                alt="Submit Houdini"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Submit Houdini to Backburner Script of Houdini</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                
                onclick="window.open('https://endk44.gumroad.com/l/oGszc', '_blank');"
              >
                Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/librarycos/project-1 (0-00-13-28).jpg"
                alt="Library Management System"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">ระบบจัดการสำหรับห้องสมุด - Library Management System</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_librarycos.html'"
              >
                Details
              </button>
            </div>
          </div>
          
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/Threadpool/project-1 (0-00-13-28)_1.jpg"
                alt="Threadpool in Rust"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Threadpool in Rust</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                
                onclick="window.open('https://github.com/nindmork/threadpool_rust')"
              >
                Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/geniusexamseat/project-1(0-00-13-28).jpg"
                alt="Genius Exam Seat "
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Genius Exam Seat - ระบบจัดสรรที่นั่งสอบอัจฉริยะ</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_geniusexamseat.html'"
              >
                Details
              </button>
            </div>
          </div>
        </div>
      </div>

      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
      <div class="btn-container">
        <button
          class="btn btn-color-2 project-btn"
          
          onclick="location.href='./projectsDev.html'"
          
        >
        More..
        </button>
      </div>

      <br/><br/>
      
      <h1 class="title">Production Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">

          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/mvjack1/thumnailmvjack2.jpg"
                alt="VFX แจ็คแฟนฉัน"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">VFX แจ็คแฟนฉัน - ช่วยด้วย (Help Me) </h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_mvjack1.html'">Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/ttredcar/2938148b6bfe47a9aedd1cedd9a9a2df_16580443792.jpg"
                alt="Funny Red jelly car"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Funny Red jelly car [Tiktok]</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="window.open('https://www.tiktok.com/@endk44/video/7121246358547238170', '_blank');"
              >
              Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/Kanchanaphisek/project-1(0-00-05-09).jpg"
                alt="Kanchanaphisek Bridge Destruction Scenes "
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">สะพานกาญจนาภิเษก Kanchanaphisek Bridge Destruction Scenes </h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="window.open('https://www.youtube.com/watch?v=gf9R90E2rrw&t=12s', '_blank');"
              >
              Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/DaddysGirl/project-1 (0-00-13-28).jpg"
                alt="VFX พ่อหนูดื้อที่สุดในโลก"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">VFX พ่อหนูดื้อที่สุดในโลก - Daddy's Girl</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_DaddysGirl.html'"
              >
              Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/3year/project-1 (0-00-13-28).jpg"
                alt="๓ ปีกับรอยยิ้มแห่งความสำเร็จ - อบจ.นครศรีธรรมราช"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">๓ ปีกับรอยยิ้มแห่งความสำเร็จ - อบจ.นครศรีธรรมราช</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_3YearKhanokporn.html'"
              >
              Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/tumyabork/project-1 (0-00-13-28)_1.jpg"
                alt="ตำย่าบอก - one31"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">VFX ตำย่าบอก - one31</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_Tumyabork.html'"
              >
              Details
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/projects/rescue/project-1 (0-00-13-28).jpg"
                alt="VFX กู้ภัยหัวใจสู้ - one31"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">VFX กู้ภัยหัวใจสู้ - one31</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='./project_rescue.html'"
              >
              Details
              </button>
            </div>
          </div>
          
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
      <div class="btn-container">
        <button
          class="btn btn-color-2 project-btn"
          
          onclick="location.href='./projects.html'"
        >
        More..
        </button>
        
      </div>
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Dev</h2>
            <div class="article-container">
              
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>React, NextJS</h3>
                  <p>Experienced</p>
                </div>
              </article>
             
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Sprint Boot</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Django</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Rest Framework</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Java</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>C++,C#</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Rust</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Swift</h3>
                  <p>Experienced</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">3D General</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Modeling</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Shading</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Rigging</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Animation</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Rendering</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>VFX, Simulation</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Composting</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Editing</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Sound Mixing</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:examplemail@gmail.com">supanatklins@gmail.com</a></p>
        </div>
  
        <div class="contact-info-container">
          <!--
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com">LinkedIn</a></p>-->
        </div>
      </div>
      <div class="contact-info-upper-container">
        
        <div class="contact-info-container">
          <img
            src="./assets/line-logo-messenger-png-2100.png"
            alt="Line icon"
            class="icon contact-icon line-icon"
          />
          <p><a href="https://line.me/ti/p/~nindmork">Nindmork</a></p>
        </div>
        
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <br><br>
      <p>Copyright &#169; 2023 Supanat Klins (endk44). All Rights Reserved.</p>
    </footer>
    
    
    
    <script>
      fetch('navbar.html')
        .then(res => res.text())
        .then(html => {
          document.getElementById('navbar-placeholder').innerHTML = html;
        });
    </script>
    
    <script src="./script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
