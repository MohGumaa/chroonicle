import React from "react";
import Title from "./Title";
import Image from "next/image";
import { RECRUITMENT_PROCESS } from "@/constants";

const Process = () => {
  return (
		<section
			className="process bg-green-90 relative py-8 lg:py-12"
			id="how_chroonicle_work"
		>
			<div className="max-container padding-container">
				<Title
					title="How does the recruitment process look like?"
					className="text-yellow-70 text-center mb-20"
				/>
				<div className="grid grid-cols-1 md:grid-cols-2 gap-20">
					{RECRUITMENT_PROCESS.map((process) => (
						<div className="flex space-x-4" key={process.id}>
							<div className="shrink-0">
								<Image
									src={process.img}
									alt="Icon"
									width={64}
									height={64}
									className="h-12 w-12"
								/>
							</div>
							<div>
								<h3 className="text-xl md:text-2xl font-medium text-green-70 mb-1">
									{process.title}
								</h3>
								<p className="text-white text-base">{process.text}</p>
							</div>
						</div>
					))}
				</div>
			</div>
		</section>
	);
};

export default Process;
