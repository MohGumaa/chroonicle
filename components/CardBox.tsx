import Image from "next/image";
import Link from "next/link";
import React from "react";

type CardBoxProps = {
	title: string;
	subtitle: string;
	text: string;
	img: string;
	cardClassName?: string;
};

const CardBox = ({
	title,
	subtitle,
	text,
	img,
	cardClassName,
}: CardBoxProps) => {
	return (
		<div
			className={`flexBetween ${
				cardClassName === 'reverse'
					? 'flex-col md:flex-row-reverse'
					: 'flex-col md:flex-row'
			} gap-x-20 gap-y-9 md:gap-y-6 py-8 mt-2 md:mt-6`}
		>
			<div className="flex-1">
				<Image
					src={img}
					alt={title}
					width={650}
					height={280}
					className="rounded-3xl object-cover w-full h-[280px] md:h-[360px] lg:h-[420px] shadow-2xl grayscale"
				/>
			</div>
			<div className="flex-1">
				<h4 className="font-[700] uppercase text-yellow-70 mb-3">{subtitle}</h4>
				<h3 className="font-normal text-green-90 text-2xl md:text-3xl lg:text-4xl mb-4">
					{title}
				</h3>
				<p className="text-base md:text-lg mb-8">{text}</p>
				<Link
					href="#contact_us"
					className="btn_green rounded-full border uppercase font-[600]"
				>
					learn more
				</Link>
			</div>
		</div>
	);
};

export default CardBox;
