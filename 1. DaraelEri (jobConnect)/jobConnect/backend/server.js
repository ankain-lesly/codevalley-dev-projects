import express from "express"
import dotenv from "dotenv"
import cors from "cors"

import authRoutes from "./Routes/auth.routes.js"
import jobRoutes from "./Routes/job.routes.js"
import connectMongoDB from "./db/connectMongoDB.js"

dotenv.config()

const app = express()
const port = process.env.PORT || 5000

app.use(cors())
app.use(express.json())
app.use(express.urlencoded({ extended: true}))

app.use("/api/jobs", jobRoutes)

app.use("/api/auth", authRoutes)


app.listen(port, () => {
    console.log(`Server is running on port: ${port}`)
    connectMongoDB()
})

