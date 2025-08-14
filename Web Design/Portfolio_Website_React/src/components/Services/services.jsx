import React from 'react';
import './services.css';

const Services = () => {
  const servicesData = [
    {
      id: 1,
      title: "Web Design",
      description: "Web development is the process of building, programming...",
    },
    {
      id: 2,
      title: "App Design",
      description: "Web development is the process of building, programming...",
    },
    {
      id: 3,
      title: "Digital Marketing",
      description: "Web development is the process of building, programming...",
    },
    {
      id: 4,
      title: "Content Writing",
      description: "Web development is the process of building, programming...",
    },
    {
      id: 5,
      title: "Graphic Design",
      description: "Web development is the process of building, programming...",
    },
    {
      id: 6,
      title: "Web Development",
      description: "Web development is the process of building, programming...",
    },
  ];

  return (
    <section className="services-section" id='services'>
      <h2 className="section-title">Our Services</h2>
      <div className="services-container">
        {servicesData.map((service) => (
          <div key={service.id} className="service-card">
            <h3>{service.title}</h3>
            <div className="card-content">
              <p>{service.description}</p>
              <button className="read-more-btn">Read More</button>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Services;