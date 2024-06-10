import React from "react";

type TitleProps = {
	title: string;
	className?: string;
};

const Title = ({
	title,
	className = 'text-green-90 text-center',
}: TitleProps) => {
	return (
		<h2
			className={`font-normal text-[24px] md:text-[32px] lg:text-[44px] leading-[120%] md:leading-[140%] ${className}`}
		>
			{title}
		</h2>
	);
};

export default Title;
