class companyProfileService {
    ajaxRequest(url, method, data = null) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url,
                method,
                data,
                processData: false,
                contentType: false,
                success: (response) => resolve(response),
                error: (error) => reject(error),
            });
        });
    }

    async getAllDataByCategory(category) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/${category}`, 'GET');
            console.log(responseData);

            if (responseData.code === 200) {
                let tableBody = '';

                responseData.data.forEach((item) => {
                    tableBody += `
                        <tr>
                            <td>${item.question}</td>
                            <td>${item.answer}</td>
                        </tr>
                    `;
                });

                $("#visionCompany").html(tableBody);
            } else {
                console.error("Invalid response data:", responseData);
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }
}

export default companyProfileService;
