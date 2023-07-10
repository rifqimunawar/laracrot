import React, { useState, useEffect } from "react";
import { AiOutlineRead } from 'react-icons/ai';
import { AiOutlinePicture } from 'react-icons/ai';
import { AiOutlinePicRight } from 'react-icons/ai';
import { BsCalendar3Week } from "react-icons/bs";



const Wallet = () => {
  const [currentDate, setCurrentDate] = useState("");

  const [currentTime, setCurrentTime] = useState(
    new Date().toLocaleTimeString([], { hour12: false })
  );

  useEffect(() => {
    const timerID = setInterval(() => {
      setCurrentTime(new Date().toLocaleTimeString([], { hour12: false }));
    }, 1000);

    return () => {
      clearInterval(timerID);
    };
  }, []);

  useEffect(() => {
    const date = new Date();
    const formattedDate = `${date.getDate()} ${date.toLocaleString("default", {
      month: "long",
    })} ${date.getFullYear()}`;

    setCurrentDate(formattedDate);
  }, []);

  return (
    <div className="section wallet-card-section pt-1">
      <div className="wallet-card">
        <div className="balance">
          <div className="left">
            <span className="title">{currentDate}</span>
            <h3 className="total">{currentTime}</h3>
          </div>
          <div className="right">
            <a href="#" className="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
            <AiOutlinePicture/>
            </a>
          </div>
        </div>
        <div className="wallet-footer">
          <div className="item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
              <div className="icon-wrapper bg-success">
              <AiOutlineRead/>
              </div>
              <strong>e-Book</strong>
            </a>
          </div>
          <div className="item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
              <div className="icon-wrapper bg-success">
                <AiOutlinePicture/>
              </div>
              <strong>Gallery</strong>
            </a>
          </div>
          <div className="item">
            <a href="app-cards.html">
              <div className="icon-wrapper bg-success">
                <AiOutlinePicRight/>
              </div>
              <strong>Post</strong>
            </a>
          </div>
          <div className="item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
              <div className="icon-wrapper bg-success">
                <BsCalendar3Week/>
              </div>
              <strong>Calendar</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Wallet;
