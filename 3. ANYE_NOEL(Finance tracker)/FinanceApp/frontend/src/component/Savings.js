// import React from "react";
// import { Container, Grid, Card, CardContent, Typography } from "@mui/material";
// import { Line } from "react-chartjs-2";
// import Chart from "chart.js/auto";
// import AccountBalanceWalletIcon from "@mui/icons-material/AccountBalanceWallet";
// import InfoIcon from "@mui/icons-material/Info";
// import "./savings.css";

// const Savings = () => {
//   const initialAmount = 900;
//   const amountLeft = 450;

//   // Dummy data for daily spending
//   const data = {
//     labels: Array.from({ length: 30 }, (_, i) => i + 1), // Days 1-30
//     datasets: [
//       {
//         label: "Amount Spent Daily",
//         data: [
//           50, 40, 60, 30, 70, 20, 90, 80, 40, 60, 30, 50, 40, 60, 70, 20, 30, 50,
//           40, 60, 30, 50, 40, 60, 70, 20, 30, 50, 40, 60,
//         ],
//         borderColor: "#3e95cd",
//         fill: false,
//       },
//     ],
//   };

//   return (
//     <Container className="savings-container">
//       <div className="savings-grid">
//         {/* Spending Chart Card on the left */}
//         <Card className="savings-card spending-card">
//           <CardContent>
//             <Typography variant="h5">Daily Spending Trend</Typography>
//             <Line data={data} />
//           </CardContent>
//         </Card>

//         {/* Budget and Advice Cards stacked on the right */}
//         <div className="budget-advice-container">
//           {/* Budget Card */}
//           <Card className="savings-card budget-card">
//             <CardContent>
//               <Grid container alignItems="center" spacing={2}>
//                 <Grid item>
//                   <AccountBalanceWalletIcon className="budget-icon" fontSize="large" />
//                 </Grid>
//                 <Grid item>
//                   <Typography variant="h5" className="budget-title">
//                     Budget Overview
//                   </Typography>
//                   <Typography variant="h6" className="budget-amount">
//                     Amount Left: ${amountLeft}
//                   </Typography>
//                   <Typography variant="body1" className="initial-amount">
//                     Initial Amount: ${initialAmount}
//                   </Typography>
//                 </Grid>
//               </Grid>
//             </CardContent>
//           </Card>

//           {/* Savings Advice Card */}
//           <Card className="savings-card advice-card">
//             <CardContent>
//               <Grid container alignItems="center" spacing={2}>
//                 <Grid item>
//                   <InfoIcon className="advice-icon" fontSize="large" />
//                 </Grid>
//                 <Grid item>
//                   <Typography variant="h5" className="advice-title">
//                     Smart Savings
//                   </Typography>
//                   <Typography variant="body1" className="advice-text">
//                     Tracking your spending habits and maintaining a budget helps improve financial stability.
//                     Stay consistent, save more, and secure your future!
//                   </Typography>
//                 </Grid>
//               </Grid>
//             </CardContent>
//           </Card>
//         </div>
//       </div>
//     </Container>
//   );
// };

// export default Savings;

import React from "react";
import { Container, Grid, Card, CardContent, Typography } from "@mui/material";
import { Line } from "react-chartjs-2";
import Chart from "chart.js/auto";
import AccountBalanceWalletIcon from "@mui/icons-material/AccountBalanceWallet";
import InfoIcon from "@mui/icons-material/Info";
import "./savings.css";

const Savings = () => {
  const initialAmount = 900;
  const amountLeft = 450;

  // Dummy data for daily spending
  const data = {
    labels: Array.from({ length: 30 }, (_, i) => i + 1), // Days 1-30
    datasets: [
      {
        label: "Amount Spent Daily",
        data: [
          50, 40, 60, 30, 70, 20, 90, 80, 40, 60, 30, 50, 40, 60, 70, 20, 30, 50,
          40, 60, 30, 50, 40, 60, 70, 20, 30, 50, 40, 60,
        ],
        borderColor: "#3e95cd",
        fill: false,
      },
    ],
  };

  return (
    <Container className="savings-container">
      <div className="savings-grid">
        {/* Spending Chart Card on the left */}
        <Card className="savings-card spending-card">
          <CardContent>
            <Typography variant="h5">Daily Spending Trend</Typography>
            <Line data={data} />
          </CardContent>
        </Card>

        {/* Budget and Advice Cards stacked on the right */}
        <div className="budget-advice-container">
          {/* Budget Card */}
          <Card className="savings-card budget-card">
            <CardContent>
              <Grid container alignItems="center" spacing={2}>
                <Grid item>
                  <AccountBalanceWalletIcon className="budget-icon" fontSize="large" />
                </Grid>
                <Grid item>
                  <Typography variant="h5" className="budget-title">
                    Budget Overview
                  </Typography>
                  <Typography variant="h6" className="budget-amount">
                    Amount Left: ${amountLeft}
                  </Typography>
                  <Typography variant="body1" className="initial-amount">
                    Initial Amount: ${initialAmount}
                  </Typography>
                </Grid>
              </Grid>
            </CardContent>
          </Card>

          {/* Savings Advice Card */}
          <Card className="savings-card advice-card">
            <CardContent>
              <Grid container alignItems="center" spacing={2}>
                <Grid item>
                  <InfoIcon className="advice-icon" fontSize="large" />
                </Grid>
                <Grid item>
                  <Typography variant="h5" className="advice-title">
                    Smart Savings
                  </Typography>
                  <Typography variant="body1" className="advice-text">
                    Tracking your spending habits and maintaining a budget helps improve financial stability.
                    Stay consistent, save more, and secure your future!
                  </Typography>
                </Grid>
              </Grid>
            </CardContent>
          </Card>
        </div>
      </div>
    </Container>
  );
};

export default Savings;

