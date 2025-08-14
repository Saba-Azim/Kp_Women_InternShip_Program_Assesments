import React from 'react';
import './MyWork.css';
import a from '../../assets/a.png';
import b from '../../assets/b.png';
import c from '../../assets/c.png';
import d from '../../assets/d.png';
import e from '../../assets/e.png';
import f from '../../assets/f.png';
import g from '../../assets/g.png';
import h from '../../assets/h.png';
import i from '../../assets/i.png';
import j from '../../assets/j.png';


const MyWork = () => {
  const mywork_data = [
    {
      w_no: 1,
      w_name: "Web Design",
      w_img: a,
    },
    {
      w_no: 2,
      w_name: "App Design",
      w_img: b,
    },
    {
      w_no: 3,
      w_name: "Digital Marketing",
      w_img: c,
    },
    {
      w_no: 4,
      w_name: "Content Writing",
      w_img: d,
    },
    {
      w_no: 5,
      w_name: "Graphic Design",
      w_img: e,
    },
    {
      w_no: 6,
      w_name: "Web Development",
      w_img: f,
    },
    {
      w_no: 7,
      w_name: "Web Development",
      w_img: g,
    },
    {
      w_no: 8,
      w_name: "Web Development",
      w_img: h,
    },
    {
      w_no: 9,
      w_name: "Web Development",
      w_img: i,
    },
    {
      w_no: 10,
      w_name: "Web Development",
      w_img: j,
    },
    

  ];
  return (
    <div className='mywork' id='work'>
        <div className="mywork-title">
            <h1>My Latest Work</h1>
        </div>
        <div className="mywork-container">
            {mywork_data.map((work, index)=>{
                return <img key={index} src={work.w_img} alt="" />
            })}
        </div>
        <div className="mywork-showmore">
          <p>Show More</p>
        </div>
    </div> 
  )
}

export default MyWork