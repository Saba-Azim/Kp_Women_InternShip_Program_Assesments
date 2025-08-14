import React from 'react'
import './about.css'
import profile from '../../assets/profile.png'

const about = () => {
  return (
    <div className='about' id='about'>
        <div className="about-title">
            <h1>About Me</h1>
        </div>
        <div className="about-sections">
            <div className="about-left">
                <img src={profile} alt="profile-img" />
            </div>
            <div className="about-right">
                <div className="about-para">
                    <p>A self-taught web developer who builds real-world systems like clinic and tourism management apps. I specializes in clean, user-friendly front-end design.</p>
                    <p>I'm now working toward launching a virtual software house, offering ready-made templates and custom solutions online.</p>
                </div>

                <div className="about-skills">
                    <div className="about-skill"><p>HTML & CSS</p><hr style={{width: "50%"}} /></div>
                    <div className="about-skill"><p>React Js</p><hr style={{width: "70%"}} /></div>
                    <div className="about-skill"><p>Laravel</p><hr style={{width: "60%"}} /></div>
                    <div className="about-skill"><p>Next Js</p><hr style={{width: "50%"}} /></div>

                </div>
            </div>
        </div>
        <div className="about-achievements">
            <div className="about-achievement">
                <h1>3+</h1>
                <p>Years of Experience</p>
            </div>
            <hr />
            <div className="about-achievement">
                <h1>10+</h1>
                <p>Projects Completed</p>
            </div>
            <hr />
            <div className="about-achievement">
                <h1>15+</h1>
                <p>Happy Clients</p>
            </div>
        </div>
    </div>
  )
}

export default about