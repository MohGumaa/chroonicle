import React from "react"
import Button from "./Button";

const Hero = () => {
  return (
		<section className="hero bg-gray-30">
			<div className="max-container padding-container flex justify-end md:justify-center items-center text-center flex-1 flex-col w-full gap-6 min-h-[550px] md:min-h-[800px] lg:min-h-[900px] pb-14 md:pb-0">
				<h1 className="text-4xl md:text-6xl lg:text-8xl font-normal capitalize">
					Focus on What Matters: Hire the Perfect Fit While We Manage
					Recruitment
				</h1>
				<p className="text-base md:text-lg lg:text-xl mb-5">
					Let us handle the complexities of recruitment, so you can focus on
					building your team and achieving your goals.
				</p>
				<Button
					type="button"
					title="contact us and start recruitment"
					variant="btn_green_outline uppercase"
				/>
			</div>
		</section>
	);
};

export default Hero;
