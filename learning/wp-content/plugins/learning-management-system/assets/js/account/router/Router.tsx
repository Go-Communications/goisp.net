import { Box, Container, Stack } from '@chakra-ui/react';
import React, { useEffect } from 'react';
import { HashRouter, Navigate, Route, Routes } from 'react-router-dom';
import { accountStyles } from '../../back-end/config/styles';
import { deleteCookie, getCookie } from '../../back-end/utils/utils';
import Notice from '../components/Notice';
import Sidebar from '../components/Sidebar';
import routes from '../constants/routes';
import EnrolledCourses from '../pages/courses/EnrolledCourses';
import Dashboard from '../pages/dashboard/Dashboard';
import OrderDetails from '../pages/order/OrderDetails';
import OrderHistory from '../pages/order/OrderHistory';
import EditProfile from '../pages/profile/EditProfile';
import ProfilePage from '../pages/profile/ProfilePage';
import localized from '../utils/global';

const Router: React.FC = () => {
	const [
		isFirstTimeAfterEmailVerification,
		seIsFirstTimeAfterEmailVerification,
	] = React.useState(false);

	useEffect(() => {
		if (getCookie('isFirstTimeAfterEmailVerification') === 'true') {
			seIsFirstTimeAfterEmailVerification(true);

			deleteCookie('isFirstTimeAfterEmailVerification');
		}
	}, []);
	return (
		<>
			{isFirstTimeAfterEmailVerification && (
				<Notice
					message="Thank you! Your email has been verified successfully."
					status="success"
				/>
			)}
			{'yes' === localized.isCurrentUserInstructor &&
			'no' === localized.isInstructorActive ? (
				<Notice
					message="You need to be approved by the administrator before you can create courses."
					status="warning"
				/>
			) : null}
			<Box bg="white" sx={accountStyles}>
				<HashRouter>
					<Container maxW="container.xl" py="16" px={{ base: 0, sm: '1rem' }}>
						<Stack
							direction="row"
							spacing={{ base: 2.5, sm: 8 }}
							id="masteriyo-account-container"
						>
							<Sidebar />
							<Box flex="1" className="mto-account-wrapper">
								<Routes>
									<Route path={routes.dashboard} element={<Dashboard />} />
									<Route path={routes.courses} element={<EnrolledCourses />} />
									<Route path={routes.order.list} element={<OrderHistory />} />
									<Route path={routes.order.view} element={<OrderDetails />} />
									<Route path={routes.user.profile} element={<ProfilePage />} />
									<Route path={routes.user.edit} element={<EditProfile />} />
									<Route
										path="*"
										element={<Navigate to={routes.dashboard} />}
									/>
								</Routes>
							</Box>
						</Stack>
					</Container>
				</HashRouter>
			</Box>
		</>
	);
};

export default Router;
