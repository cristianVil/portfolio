<?php get_header(); ?>

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Cristian <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>TalkAholic</h1>
            <h2>Language Exchange Mobile App</h2>
            <p>A dynamic mobile application designed to connect language learners worldwide. 
              Built with React Native and modern technologies, TalkAholic provides a platform 
              for users to practice languages through chat, voice calls, and cultural exchange. 
              Features include real-time messaging, language matching algorithms, and an 
              intuitive user interface that makes language learning engaging and interactive.</p>
          </div>
          <div class="project-img">
            <img src="<?php echo get_theme_file_uri('img/img-1.png'); ?>" alt="TalkAholic App Screenshot">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="<?php echo get_theme_file_uri('img/img-2.jpg'); ?>" alt="Profile Picture">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Me</span></h1>
        <h2>Full Stack Developer</h2>
        <p>I am a passionate Full Stack Developer with expertise in modern web and mobile development technologies. 
          Specializing in React, React Native, and JavaScript frameworks, I create responsive and user-friendly 
          applications that solve real-world problems. My recent work includes developing TalkAholic, a language 
          exchange mobile app that connects learners worldwide. I am dedicated to writing clean, efficient code 
          and implementing best practices in software development. Always eager to learn new technologies and 
          take on challenging projects that push the boundaries of what's possible in web and mobile development.</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+63 919 2941 250</h2>
            <h2>+63 985 4689 997</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>cv143891@gmail.com</h2>
            <h2>CristianGwaps@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Maragusan, Davao De Oro, Philippines</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

<?php get_footer(); ?>
