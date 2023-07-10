import { BsFillCaretUpFill, BsFillCaretDownFill } from "react-icons/bs";

type HomepageProps = {
 totalMapaba: string;
 totalPKD: string;
 totalPKL: string;
 totalPKN: string;
};

const Statistik = (props: HomepageProps) => {
  return (
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
  );
};

export default Statistik;
