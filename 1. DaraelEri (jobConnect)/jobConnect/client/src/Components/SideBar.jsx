import React from 'react'
import { Sidebar } from 'flowbite-react'
import { HiChartPie, HiArrowSmRight, HiInbox, HiShoppingBag, HiTable, HiUser, HiViewBoards, HiHome} from 'react-icons/hi'


function SideBar() {
  return (
  <div className='w-[20rem] h-[100vh] bg-blue-700 p-5'>

    <div className='text-bold text-white text-5xl'>
      Jobie
    </div>

    <div className='grid justify-between align-center'>
      <div className='flex align-center justify-between'>
          <HiHome/>
          Dashboard
      </div>

    </div>
    
  </div>
  )
}

export default SideBar
