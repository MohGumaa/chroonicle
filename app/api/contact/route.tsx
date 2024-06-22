export const GET = async() => {
  // return new Response("Contact");
  return Response.json("Contact");
}

export async function POST(request: Request) {
	const valie = await request.json();

	return new Response(JSON.stringify(valie), {
		headers: {
			'Content-Type': 'application/json',
		},
		status: 201
	});
};