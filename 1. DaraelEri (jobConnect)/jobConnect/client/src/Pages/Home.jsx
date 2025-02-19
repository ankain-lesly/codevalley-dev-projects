import React from 'react'

import jobCard from '../Components/jobCard'
import smallCards from '../Components/smallCards'

function Home() {
  return (
    <div className="bg-gray-100">  
      <main className="container mx-auto my-10 min-h-screen">  
        <section className="text-center mb-10">  
          <h2 className="text-3xl font-semibold mb-2">Find Your Dream Job</h2>  
          <p className="text-gray-600 mb-4">Search through thousands of job listings</p>  
          <input  
            type="text"  
            placeholder="Search for jobs..."  
            className="border border-gray-300 rounded py-2 px-4 w-1/2"  
          />  
          <button className="bg-green-500 text-white rounded px-4 py-2 hover:bg-green-600">  
            Search  
          </button>  
        </section>  

        <section className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Software Engineer</h3>  
            <p className="text-gray-500">Company XYZ</p>  
            <p className="mt-2 text-gray-600">Location: New York</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Product Manager</h3>  
            <p className="text-gray-500">Company ABC</p>  
            <p className="mt-2 text-gray-600">Location: San Francisco</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">UX Designer</h3>  
            <p className="text-gray-500">Company 123</p>  
            <p className="mt-2 text-gray-600">Location: Remote</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div> 
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Software Engineer</h3>  
            <p className="text-gray-500">Company XYZ</p>  
            <p className="mt-2 text-gray-600">Location: New York</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Product Manager</h3>  
            <p className="text-gray-500">Company ABC</p>  
            <p className="mt-2 text-gray-600">Location: San Francisco</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">UX Designer</h3>  
            <p className="text-gray-500">Company 123</p>  
            <p className="mt-2 text-gray-600">Location: Remote</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Software Engineer</h3>  
            <p className="text-gray-500">Company XYZ</p>  
            <p className="mt-2 text-gray-600">Location: New York</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Product Manager</h3>  
            <p className="text-gray-500">Company ABC</p>  
            <p className="mt-2 text-gray-600">Location: San Francisco</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">UX Designer</h3>  
            <p className="text-gray-500">Company 123</p>  
            <p className="mt-2 text-gray-600">Location: Remote</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Software Engineer</h3>  
            <p className="text-gray-500">Company XYZ</p>  
            <p className="mt-2 text-gray-600">Location: New York</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">Product Manager</h3>  
            <p className="text-gray-500">Company ABC</p>  
            <p className="mt-2 text-gray-600">Location: San Francisco</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>  
          <div className="bg-white shadow-md p-6 rounded-lg">  
            <h3 className="text-xl font-semibold">UX Designer</h3>  
            <p className="text-gray-500">Company 123</p>  
            <p className="mt-2 text-gray-600">Location: Remote</p>  
            <button className="mt-4 bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
              Apply Now  
            </button>  
          </div>   
        </section>  
      </main>  

      <footer className="bg-white mt-10">  
        <div className="container mx-auto py-4 text-center">  
          <p className="text-gray-500">© 2023 Job Portal. All rights reserved.</p>  
        </div>  
      </footer>  
    </div>
  )
}

export default Home
