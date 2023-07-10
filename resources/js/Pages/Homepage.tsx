import React, { useState, useEffect } from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import Wallet from "@/Components/Home/Wallet";
import Statistik from "@/Components/Home/Statistic";

type HomepageProps = {
  totalMapaba: string;
  totalPKD: string;
  totalPKL: string;
  totalPKN: string;
  };

const Homepage = (props: HomepageProps) => {
    console.log(props);
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
                <div id="appCapsule">
                    <Wallet />
                    <div className="section">
                        <div className="row mt-2">
                            <div className="col-6">
                                <div className="stat-box">
                                    <div className="title">Mapaba</div>
                                    <div className="value text-success text-center">
                                        {props.totalMapaba}
                                    </div>
                                </div>
                            </div>
                            <div className="col-6">
                                <div className="stat-box">
                                    <div className="title">PKD</div>
                                    <div className="value text-success text-center">
                                        {props.totalPKD}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row mt-2">
                            <div className="col-6">
                                <div className="stat-box">
                                    <div className="title">PKL</div>
                                    <div className="value text-success text-center">
                                        {props.totalPKL}
                                    </div>
                                </div>
                            </div>
                            <div className="col-6">
                                <div className="stat-box">
                                    <div className="title">PKN</div>
                                    <div className="value text-success text-center">
                                        {props.totalPKN}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <Footer />
            </div>
        </>
    );
};

export default Homepage;
