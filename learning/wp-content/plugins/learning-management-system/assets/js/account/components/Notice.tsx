import { Alert, AlertIcon } from '@chakra-ui/react';
import { __ } from '@wordpress/i18n';
import React from 'react';

interface NoticeProps {
	message: string;
	status: 'info' | 'warning' | 'success' | 'error';
}

const Notice: React.FC<NoticeProps> = ({ message, status }) => {
	return (
		<Alert status={status}>
			<AlertIcon />
			{__(message, 'masteriyo')}
		</Alert>
	);
};

export default Notice;
