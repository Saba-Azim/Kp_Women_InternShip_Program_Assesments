import React from 'react'
import './footer.css'
import logo from '../../assets/logo.png'
import mail from '../../assets/mail.png'

const footer = () => {
  return (
    <div className='footer'>
        <div className="footer-top">
            <div className="footer-top-left">
                <img src={logo} alt="footer-logo" />
                <p>I'm a web developer with 3+ years of experience I'm a web developer with 3+ years of experience I'm a web developer with 3+ years of experience</p>
            </div>
            <div className="footer-top-right">
                <div className="footer-email-input">
                    <img src={mail} alt="" />
                    <input type="email" placeholder='Enter Your Email'/> 
                </div>
                <div className="footer-subscribe">Subscribe</div>
            </div>
        </div>
        <hr />
         <div className="footer-bottom">
            <p className="footer-bottom-left">All rights reserved</p>
            <div className="footer-bottom-right">
                <p>Terms of Services</p>
                <p>Privacy Policy</p>
                <p>Connect with me</p>
            </div>
         </div>
    </div>
  )
}

export default footer