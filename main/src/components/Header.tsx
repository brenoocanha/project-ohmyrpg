import Image from "next/image"
import Link from "next/link"

import logo from '@/assets/logo.png'

export function Header() {
  return (
    <header className="bg-none backdrop-blur-sm backdrop-brightness-50 h-22 w-full z-50 fixed shadow-2xl">
      <nav className="w-full flex justify-between items-center px-16 max-w-[1920px] mx-auto">
        <Link href='/'>
          <Image
            src={logo}
            alt="Site Logo"
            height={100}
            width={250}
          />
        </Link>
        <ul className="flex gap-8">

          <li className="">
            <Link href='/'>
              <h3 className="text-xl text-neutral hover:text-primary transition-all duration-500">INÍCIO</h3>
            </Link>
          </li>

          <li className="">
            <Link href='/blog'>
              <h3 className="text-xl text-neutral hover:text-primary transition-all duration-500">BLOG</h3>
            </Link>
          </li>

          <li className="">
            <Link href='/servidores'>
              <h3 className="text-xl text-neutral hover:text-primary transition-all duration-500">SERVIDORES</h3>
            </Link>
          </li>

        </ul>
      </nav>
    </header>
  )
}