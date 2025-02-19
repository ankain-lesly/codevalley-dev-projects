import React, { useState } from 'react';  

const Contact = () => {  
  const [formData, setFormData] = useState({ name: '', email: '', message: '' });  
  const [submitted, setSubmitted] = useState(false);  

  const handleChange = (e) => {  
    const { name, value } = e.target;  
    setFormData({ ...formData, [name]: value });  
  };  

  const handleSubmit = (e) => {  
    e.preventDefault();  
    console.log(formData); // Process your form data here  
    setSubmitted(true);  
  };  

  return (  
    <div className="container mx-auto my-10 px-4">  
      <h2 className="text-3xl font-semibold text-center mb-8">Contact Us</h2>  
      <form onSubmit={handleSubmit} className="bg-white p-6 rounded-lg shadow-lg">  
        {submitted ? (  
          <div className="text-center text-green-600">  
            <h3 className="text-xl">Thank you for your message!</h3>  
            <p>We'll get back to you shortly.</p>  
          </div>  
        ) : (  
          <>  
            <div className="mb-4">  
              <label className="block text-gray-700 mb-2" htmlFor="name">Name</label>  
              <input  
                type="text"  
                name="name"  
                id="name"  
                className="border rounded w-full px-3 py-2"  
                value={formData.name}  
                onChange={handleChange}  
                required  
              />  
            </div>  

            <div className="mb-4">  
              <label className="block text-gray-700 mb-2" htmlFor="email">Email</label>  
              <input  
                type="email"  
                name="email"  
                id="email"  
                className="border rounded w-full px-3 py-2"  
                value={formData.email}  
                onChange={handleChange}  
                required  
              />  
            </div>  

            <div className="mb-4">  
              <label className="block text-gray-700 mb-2" htmlFor="message">Message</label>  
              <textarea  
                name="message"  
                id="message"  
                rows="4"  
                className="border rounded w-full px-3 py-2"  
                value={formData.message}  
                onChange={handleChange}  
                required  
              ></textarea>  
            </div>  

            <button type="submit" className="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">  
              Send Message  
            </button>  
          </>  
        )}  
      </form>  
    </div>  
  );  
};  

export default Contact;