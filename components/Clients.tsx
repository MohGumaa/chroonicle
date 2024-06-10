import React from "react";
import Title from "./Title";
import Image from "next/image";
import { CLIENTS_LOGS } from "@/constants";

const Clients = () => {
  return (
		<section className="clients bg-gray-30 py-8 lg:py-12" id="#our_clients">
			<div className="max-container padding-container">
				<Title title="Hundreds of High-Growth Tech Companies Achieve Hiring Success with Chronicle" />
				<div className="flexBetween flex-wrap gap-x-16 gap-y-10 py-8 mt-6">
					{CLIENTS_LOGS.map((clinet, index) => (
						<Image
							key={index}
							src={clinet}
							alt={`Clinet-${index} Logo`}
							width={140}
							height={40}
							className="grayscale"
						/>
					))}
				</div>
			</div>
		</section>
	);
};

export default Clients;
