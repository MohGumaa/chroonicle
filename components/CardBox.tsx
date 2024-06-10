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
			} gap-x-20 gap-y-6 py-8 mt-6`}
		>
			<div className="flex-1">
				<Image
					src={img}
					alt={title}
					width={650}
					height={430}
					className="rounded-3xl object-cover h-[430px] w-full shadow-2xl grayscale"
				/>
			</div>
			<div className="flex-1">
				<h4 className="font-[700] uppercase text-yellow-70 mb-3">{subtitle}</h4>
				<h3 className="font-normal text-green-90 text-4xl mb-4">{title}</h3>
				<p className="text-base md:text-lg mb-8">{text}</p>
				<Link
					href="#contact"
					className="btn_green rounded-full border uppercase font-[600]"
				>
					learn more
				</Link>
			</div>
		</div>
	);
};

export default CardBox;
