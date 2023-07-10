import React, { useState, useEffect } from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import Wallet from "@/Components/Home/Wallet";

const Homepage = () => {
  return (
    <>
      <Head>
        <link
          rel="stylesheet"
          href="/mobile_assets/assets/css/style.css"
        />
      </Head>
      <div>
        <Navbar />
         <div id = "appCapsule">
          <Wallet/>
         </div>
        <Footer/>
      </div>
    </>
  );
};

export default Homepage;
