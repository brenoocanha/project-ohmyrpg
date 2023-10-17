import { Header } from '@/components/Header'
import './globals.css'
import type { Metadata } from 'next'
import { Inter, Roboto_Slab } from 'next/font/google'

const inter = Inter({ subsets: ['latin'] })
const roboto = Roboto_Slab({
  subsets: ['latin']
})

export const metadata: Metadata = {
  title: 'OhMyRPG',
  description: 'Um site sobre os jogos do momento',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="pt-br">
      <body className={`${roboto.className} bg-light min-h-screen`}>
        <Header />
        {children}
      </body>
    </html>
  )
}
