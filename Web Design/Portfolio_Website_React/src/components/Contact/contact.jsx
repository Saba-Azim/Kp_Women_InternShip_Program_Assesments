import React from 'react'
import './contact.css'
import mail from '../../assets/mail.png'
import address from '../../assets/address.png'
import phone from '../../assets/phone.svg'

const contact = () => {
  return (
    <div className='contact' id='contact'>
        <div className="contact-title">
            <h1>Get in Touch</h1>
        </div>

        <div className="contact-section">
            <div className="contact-left">
                <h1>Let's Talk</h1>
                 <p>I'm currently available to take new projects, so feel free to contact</p>
                 <div className="contact-details">
                    <div className="contact-detail">
                        <img src={mail} alt="" /> <p>abc@gmail.com</p>
                    </div>
                    <div className="contact-detail">
                        <img src={address} alt="" /> <p>Mingora, Swat</p>
                    </div>
                    <div className="contact-detail">
                        <img src={phone} alt="" /><p>+92-XXXXXXXXXX</p>
                    </div>
                 </div>
            </div>
            <form className='contact-right'>
                <label htmlFor="">Your Name</label>
                <input type="text" placeholder='Enter Your Name' name='name' />
                <label htmlFor="">Your Email</label>
                <input type="email" placeholder='Enter Your Email' name='email'/>
                <label htmlFor="">Your Message</label>
                <textarea name="message" rows="8" placeholder='Enter Your Message'></textarea>
                <button className='contact-submit' type='submit'>Submit Now</button>
            </form>

        </div>
    </div>
  )
}


export default contact
