import React from 'react';
import './App.css';

function App() {
  return (
    <div className="App">
      {/* Navigation */}
      <nav className="navbar">
        <div className="container">
          <div className="logo">TechSolutions</div>
          <ul className="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>

      {/* Hero Section */}
      <header id="home" className="hero">
        <div className="container">
          <h1>Innovative Software Solutions</h1>
          <p>Transforming your business with cutting-edge technology and expert development</p>
          <button className="cta-button">Get Started</button>
        </div>
      </header>

      {/* Services Section */}
      <section id="services" className="services">
        <div className="container">
          <h2>Our Services</h2>
          <div className="services-grid">
            <div className="service-card">
              <div className="icon">💻</div>
              <h3>Web Development</h3>
              <p>Custom websites and web applications tailored to your needs.</p>
            </div>
            <div className="service-card">
              <div className="icon">📱</div>
              <h3>Mobile Apps</h3>
              <p>iOS and Android applications for your business.</p>
            </div>
            <div className="service-card">
              <div className="icon">🔍</div>
              <h3>UI/UX Design</h3>
              <p>Beautiful and intuitive user experiences.</p>
            </div>
          </div>
        </div>
      </section>

      {/* About Section */}
      <section id="about" className="about">
        <div className="container">
          <div className="about-content">
            <h2>About Us</h2>
            <p>We are a team of passionate developers and designers dedicated to creating exceptional digital experiences. With years of experience in the industry, we help businesses of all sizes achieve their goals through technology.</p>
            <button className="secondary-button">Learn More</button>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="contact">
        <div className="container">
          <h2>Get In Touch</h2>
          <div className="contact-grid">
            <div className="contact-info">
              <h3>Contact Information</h3>
              <p>📧 hello@techsolutions.com</p>
              <p>📞 (123) 456-7890</p>
              <p>📍 123 Tech Street, Silicon Valley, CA</p>
            </div>
            <form className="contact-form">
              <input type="text" placeholder="Your Name" required />
              <input type="email" placeholder="Your Email" required />
              <textarea placeholder="Your Message" rows="5" required></textarea>
              <button type="submit" className="cta-button">Send Message</button>
            </form>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="footer">
        <div className="container">
          <p>&copy; {new Date().getFullYear()} TechSolutions. All rights reserved.</p>
        </div>
      </footer>
    </div>
  );
}

export default App;
