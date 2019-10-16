<?php

    return [
        'duration' => [
            '36 months', '48 months', '60 months'
        ],

        'rates' => [
            '36' => [
                0.0347, // > 5000 && < 9999
                0.0325, // > 9999
                0.0321, // > 24999
                0.0320, // > 74999
            ],
            '48' => [
                0.0271, // > 5000 && < 9999
                0.0254, // > 9999
                0.0252, // > 24999
                0.0250, // > 74999
            ],
            '60' => [
                0.0230, // > 5000 && < 9999
                0.0213, // > 9999
                0.0210, // > 24999
                0.0208, // > 74999
            ],
        ],

        'notification' => 'Applicant hereby authorizes the release of credit information to our company, or its designee (and any assignee or potential assignee thereof) from any source including credit bureau reporting agencies and applicant’s bank. If personal information is provided, by selecting accept, the undersigned individual(s) provides instruction to Univest Capital, Inc., or its designee (and any assignee or potential assignee thereof) authorizing review of his/her personal credit profile from a national credit bureau. I hereby represent that all the information contained in this credit application is true, correct, and complete. This application is made under and shall be governed by the laws of the State of Pennsylvania. Payments do not include applicable taxes and fees. $150 lease documentation fee required in advance. $1 Purchase Option required. Univest Capital, Inc. is a subsidiary of Univest Bank and Trust Co. an Equal Opportunity Lender.'
    ];