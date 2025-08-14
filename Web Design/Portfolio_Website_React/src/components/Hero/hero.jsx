import React from 'react'
import './hero.css'
import profile from '../../assets/profile.png'

const hero = () => {
  return (
    <div className='hero' id='home'>
        <img src={profile} alt="profile-img" />
        <h1><span>I'm Sabahun Noor,</span> a Web Developer</h1>
        <p>I'm detail-oriented web developer with a knack for transforming complex problems into simple, elegant web solutions. </p>
        <div className="hero-action">
            <div className="hero-connect">
                Connect with Me
            </div>
            <div className="hero-resume">
                My Resume
            </div>
        </div>
    </div>
  )
}

export default hero