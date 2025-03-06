async function login(user_name, password) {
  const response = await fetch("http://localhost:3000/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ user_name, password }),
    });
    const data = await response.json();
    if (data.error) {
        throw new Error(data.error);
    }
    return data;
}
