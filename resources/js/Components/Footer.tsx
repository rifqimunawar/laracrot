import React from "react";
import { Head } from "@inertiajs/react";
import { AiOutlineHome } from 'react-icons/ai';
import { AiOutlineSearch } from 'react-icons/ai';
import { AiOutlineArrowUp } from 'react-icons/ai';
import { AiOutlineAlignCenter } from 'react-icons/ai';
import { AiOutlineUser } from 'react-icons/ai';

const Footer = () => {
  return (
    <>
      <div className="appBottomMenu">
        <a href="#" className="item active">
          <div className="col">
            <h3 style={{ display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }}>
              <AiOutlineHome size={25} />
            </h3>
            {/* <strong>Item 1</strong> */}
          </div>
        </a>
        <a href="#" className="item">
          <div className="col">
            <h3 style={{ display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }}>
              <AiOutlineSearch size={25} />
              </h3>
              {/* <strong>Item 2</strong> */}
            </div>
          </a>
          <a href="#" className="item">
            <div className="col">
              <div className="action-button large">
                <h3 style={{ display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }}>
                  <AiOutlineArrowUp size={25} />
                </h3>
              </div>
            </div>
          </a>
          <a href="#" className="item">
            <div className="col">
              <h3 style={{ display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }}>
                <AiOutlineAlignCenter size={25} />
                </h3>
                {/* <strong>Item 4</strong> */}
              </div>
            </a>
            <a href="#" className="item">
              <div className="col">
                <h3 style={{ display: "flex", alignItems: "center", justifyContent: "center", height: "100%" }}>
                  <AiOutlineUser size={25} />
                  </h3>
                  {/* <strong>Item 5</strong> */}
                </div>
              </a>
          </div>
        </>
      );
    };
    
export default Footer;
