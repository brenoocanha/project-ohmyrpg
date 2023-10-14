import Image from "next/image"
import hellAngel from "@/assets/hell-angel-h-section.jpg"

export default function Home() {

  const imageStyle = {
    width: '100%',
  }

  return (
    <main className="">
      <section id="s-hero">
        <div className="w-full max-h-[800px] overflow-hidden z-0 mx-auto bg-center">
          <Image
            src={hellAngel}
            alt="Hell Angel"
            style={imageStyle}
          />
        </div>
      </section>
    </main>
  )
}
